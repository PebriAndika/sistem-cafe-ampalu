#!/usr/bin/env bash
# exit on error
set -o errexit

# Perintah untuk build
composer install --no-dev
npm install
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force