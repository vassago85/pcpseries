#!/bin/sh
set -e

echo "Starting PCP Series..."

mkdir -p /var/www/html/storage/framework/cache/data
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/logs
mkdir -p /var/www/html/bootstrap/cache
mkdir -p /var/www/html/database

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "base64:" ]; then
    echo "ERROR: APP_KEY is missing. Set it in .env on the host." >&2
    exit 1
fi

if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
    chown www-data:www-data /var/www/html/database/database.sqlite
fi

php artisan migrate --force

php artisan config:clear
php artisan route:clear
php artisan view:clear

if [ "$APP_ENV" = "production" ]; then
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    if [ ! -f /var/www/html/public/build/manifest.json ]; then
        echo "ERROR: Vite build missing (public/build/manifest.json). Rebuild the Docker image." >&2
        exit 1
    fi
fi

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

echo "PARC ready — open http://localhost:8089/plenum or http://localhost:8089/charge"

exec /usr/bin/supervisord -c /etc/supervisord.conf
