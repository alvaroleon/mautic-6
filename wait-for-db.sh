#!/usr/bin/env bash
set -euo pipefail

# Comprueba variables de entorno
: "${MAUTIC_DB_HOST:?Define MAUTIC_DB_HOST}"
: "${MAUTIC_DB_USER:?Define MAUTIC_DB_USER}"
: "${MAUTIC_DB_PASSWORD:?Define MAUTIC_DB_PASSWORD}"

echo "→ Esperando a que MySQL en $MAUTIC_DB_HOST esté disponible..."

until mysqladmin ping \
    -h"$MAUTIC_DB_HOST" \
    -u"$MAUTIC_DB_USER" \
    -p"$MAUTIC_DB_PASSWORD" \
    --silent; do
  sleep 5
done

echo "✓ MySQL está up, ejecutando comando: $*"
exec "$@"
