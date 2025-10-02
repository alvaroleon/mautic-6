#!/bin/bash

# Script para ejecutar comandos de Mautic secuencialmente

echo "Executing: mautic:segments:update --batch-limit=500"
php /var/www/html/bin/console mautic:segments:update --batch-limit=500
sleep 1

echo "Executing: mautic:campaigns:update"
php /var/www/html/bin/console mautic:campaigns:update
sleep 1

echo "Executing: mautic:campaigns:trigger"
php /var/www/html/bin/console mautic:campaigns:trigger
sleep 1

echo "Executing: mautic:messages:send"
php /var/www/html/bin/console mautic:messages:send

echo "All commands have been executed"
