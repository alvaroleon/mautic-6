#!/bin/bash

# Verificar que se proporcione el tag como argumento
if [ -z "$1" ]; then
  echo "❌ Error: Debes proporcionar un tag como argumento"
  echo "Uso: $0 <tag> [arch=current|x86|arm|all]"
  echo "Ejemplo: $0 6-apache arch=x86"
  echo "Ejemplo: $0 6-apache arch=all"
  exit 1
fi

TAG="$1"

# Procesar argumento arch (default: current)
ARCH="current"
for arg in "$@"; do
  case $arg in
    arch=*)
      ARCH="${arg#*=}"
      ;;
  esac
done

# Validar valor de arch
if [[ ! "$ARCH" =~ ^(current|x86|arm|all)$ ]]; then
  echo "❌ Error: Valor de arch inválido: $ARCH"
  echo "Valores permitidos: current, x86, arm, all"
  exit 1
fi

# Obtener directorio donde está el script
BASE_DIR="$(cd "$(dirname "$0")" && pwd)"

# Configurar plataformas según arch
case $ARCH in
  current)
    PLATFORMS=""
    PLATFORM_FLAG=""
    ARCH_SUFFIX=""
    echo "🏗️  Arquitectura: current (SO del host)"
    ;;
  x86)
    PLATFORMS="linux/amd64"
    PLATFORM_FLAG="--platform $PLATFORMS"
    ARCH_SUFFIX="-x86"
    echo "🏗️  Arquitectura: x86 (linux/amd64)"
    ;;
  arm)
    PLATFORMS="linux/arm64"
    PLATFORM_FLAG="--platform $PLATFORMS"
    ARCH_SUFFIX="-arm"
    echo "🏗️  Arquitectura: arm (linux/arm64)"
    ;;
  all)
    PLATFORMS="linux/amd64,linux/arm64"
    PLATFORM_FLAG="--platform $PLATFORMS"
    ARCH_SUFFIX="-multiarch"
    echo "🏗️  Arquitectura: all (linux/amd64,linux/arm64)"
    ;;
esac

echo "====================================="
echo " Iniciando build de Docker"
echo " Directorio base: $BASE_DIR"
echo " Dockerfile: $BASE_DIR/apache/Dockerfile"
echo " Tags: flownexai/mautic:$TAG-apache$ARCH_SUFFIX, flownexai/mautic:latest-apache$ARCH_SUFFIX, flownexai/mautic:latest$ARCH_SUFFIX"
echo "====================================="

if [ "$ARCH" = "all" ]; then
  # Para multi-arch usar buildx con push directo
  docker buildx build $PLATFORM_FLAG "$BASE_DIR" -f "$BASE_DIR/apache/Dockerfile" \
    -t "flownexai/mautic:$TAG-apache$ARCH_SUFFIX" \
    -t "flownexai/mautic:latest-apache$ARCH_SUFFIX" \
    -t "flownexai/mautic:latest$ARCH_SUFFIX" \
    --push
else
  # Para single-arch usar build normal
  docker build $PLATFORM_FLAG "$BASE_DIR" -f "$BASE_DIR/apache/Dockerfile" \
    -t "flownexai/mautic:$TAG-apache$ARCH_SUFFIX" \
    -t "flownexai/mautic:latest-apache$ARCH_SUFFIX" \
    -t "flownexai/mautic:latest$ARCH_SUFFIX"
fi

if [ $? -eq 0 ]; then
  echo "✅ Build completado exitosamente"
  echo "   - flownexai/mautic:$TAG-apache$ARCH_SUFFIX"
  echo "   - flownexai/mautic:latest-apache$ARCH_SUFFIX"
  echo "   - flownexai/mautic:latest$ARCH_SUFFIX"
  
  # Solo hacer push manual si no es multi-arch (all ya hace push automático)
  if [ "$ARCH" != "all" ]; then
    echo ""
    echo "====================================="
    echo " Verificando autenticación ECR..."
    echo "====================================="
    
    ECR_REGISTRY="476114109150.dkr.ecr.us-east-1.amazonaws.com/flownexai/mautic"
    ECR_REGION="us-east-1"
    
    # Verificar si AWS CLI está disponible
    if ! command -v aws &> /dev/null; then
      echo "❌ AWS CLI no está instalado"
      echo "Instálalo con: brew install awscli"
      exit 1
    fi
    
    # Intentar autenticación automática
    echo "🔐 Autenticando con ECR..."
    if aws ecr get-login-password --region $ECR_REGION --profile=default | docker login --username AWS --password-stdin 476114109150.dkr.ecr.$ECR_REGION.amazonaws.com 2>/dev/null; then
      echo "✅ Autenticación exitosa"
    else
      echo "❌ Error de autenticación con ECR"
      echo ""
      echo "Para autenticarte manualmente ejecuta:"
      echo "aws ecr get-login-password --region $ECR_REGION --profile=default | docker login --username AWS --password-stdin 476114109150.dkr.ecr.$ECR_REGION.amazonaws.com"
      echo ""
      echo "Verifica que tengas las credenciales AWS correctas configuradas:"
      echo "- AWS_ACCESS_KEY_ID"
      echo "- AWS_SECRET_ACCESS_KEY"
      echo "- O un perfil configurado en ~/.aws/credentials"
      exit 1
    fi
    
    echo ""
    echo "====================================="
    echo " Iniciando push a ECR en 5 segundos..."
    echo "====================================="
    
    # Temporizador de 5 segundos
    for i in 5 4 3 2 1; do
      echo "⏳ $i..."
      sleep 1
    done
    echo ""
    
    # Etiquetar imágenes para ECR
    docker tag "flownexai/mautic:$TAG-apache$ARCH_SUFFIX" "$ECR_REGISTRY:$TAG-apache$ARCH_SUFFIX"
    docker tag "flownexai/mautic:latest-apache$ARCH_SUFFIX" "$ECR_REGISTRY:latest-apache$ARCH_SUFFIX"
    docker tag "flownexai/mautic:latest$ARCH_SUFFIX" "$ECR_REGISTRY:latest$ARCH_SUFFIX"
    
    # Push a ECR
    echo "📤 Pushing flownexai/mautic:$TAG-apache$ARCH_SUFFIX..."
    docker push "$ECR_REGISTRY:$TAG-apache$ARCH_SUFFIX"
    
    echo "📤 Pushing flownexai/mautic:latest-apache$ARCH_SUFFIX..."
    docker push "$ECR_REGISTRY:latest-apache$ARCH_SUFFIX"
    
    echo "📤 Pushing flownexai/mautic:latest$ARCH_SUFFIX..."
    docker push "$ECR_REGISTRY:latest$ARCH_SUFFIX"
    
    if [ $? -eq 0 ]; then
      echo ""
      echo "✅ Push a ECR completado exitosamente"
      echo "   - $ECR_REGISTRY:$TAG-apache$ARCH_SUFFIX"
      echo "   - $ECR_REGISTRY:latest-apache$ARCH_SUFFIX"
      echo "   - $ECR_REGISTRY:latest$ARCH_SUFFIX"
    else
      echo "❌ Error durante el push a ECR"
      exit 1
    fi
  else
    echo ""
    echo "✅ Push a ECR completado exitosamente (multi-arch con buildx)"
    echo "   - 476114109150.dkr.ecr.us-east-1.amazonaws.com/flownexai/mautic:$TAG-apache$ARCH_SUFFIX"
    echo "   - 476114109150.dkr.ecr.us-east-1.amazonaws.com/flownexai/mautic:latest-apache$ARCH_SUFFIX"
    echo "   - 476114109150.dkr.ecr.us-east-1.amazonaws.com/flownexai/mautic:latest$ARCH_SUFFIX"
  fi
else
  echo "❌ Error durante el build"
  exit 1
fi

