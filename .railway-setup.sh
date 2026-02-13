#!/bin/bash
set -e

php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

if [ ! -f .env ]; then
    echo "APP_NAME=\"Happy Valentines\"" > .env
    echo "APP_ENV=production" >> .env
    echo "APP_DEBUG=false" >> .env
    echo "APP_KEY=base64:hzutKpmXOMnIdJqhmg7dBDJrAkVxqS7rteyabf6R6lk=" >> .env
    echo "LOG_CHANNEL=stderr" >> .env
    echo "LOG_LEVEL=error" >> .env
fi

php artisan config:cache
php artisan route:cache
php artisan view:cache

chmod -R 775 storage bootstrap/cache || true
