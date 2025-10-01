#!/bin/bash

# Verificar que se proporcione el tag como argumento
if [ -z "$1" ]; then
  echo "❌ Error: Debes proporcionar un tag como argumento"
  echo "Uso: $0 <tag>"
  echo "Ejemplo: $0 6-apache"
  exit 1
fi

TAG="$1"

# Obtener directorio donde está el script
BASE_DIR="$(cd "$(dirname "$0")" && pwd)"

echo "====================================="
echo " Iniciando build de Docker"
echo " Directorio base: $BASE_DIR"
echo " Dockerfile: $BASE_DIR/apache/Dockerfile"
echo " Tags: flownexai/mautic:$TAG-apache, flownexai/mautic:latest-apache, flownexai/mautic:latest"
echo "====================================="

docker build "$BASE_DIR" -f "$BASE_DIR/apache/Dockerfile" -t "flownexai/mautic:$TAG-apache" -t "flownexai/mautic:latest-apache" -t "flownexai/mautic:latest"

if [ $? -eq 0 ]; then
  echo "✅ Build completado exitosamente"
  echo "   - flownexai/mautic:$TAG-apache"
  echo "   - flownexai/mautic:latest-apache"
  echo "   - flownexai/mautic:latest"
else
  echo "❌ Error durante el build"
  exit 1
fi

