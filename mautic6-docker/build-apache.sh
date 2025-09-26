#!/bin/bash

# Obtener directorio donde está el script
BASE_DIR="$(cd "$(dirname "$0")" && pwd)"

echo "====================================="
echo " Iniciando build de Docker"
echo " Directorio base: $BASE_DIR"
echo " Dockerfile: $BASE_DIR/apache/Dockerfile"
echo " Tag: mocadev/mautic:6-apache"
echo "====================================="

docker build "$BASE_DIR" -f "$BASE_DIR/apache/Dockerfile" -t mocadev/mautic:6-apache

if [ $? -eq 0 ]; then
  echo "✅ Build completado exitosamente"
else
  echo "❌ Error durante el build"
  exit 1
fi

