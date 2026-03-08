#!/bin/bash
set -e

find /var/www/html -type d -exec chmod 755 {} \;
find /var/www/html -type f -exec chmod 644 {} \;

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Install dependencies without production optimizations
composer install
wait $!

npm install
wait $!

npm run build
wait $!

# Generate key and run migrations first
php artisan key:generate --force
wait $!

php artisan migrate --force
wait $!

# THEN clear caches (this preserves the built assets)
php artisan optimize:clear

# Laravel optimizations
php artisan config:cache    
php artisan route:cache       
php artisan view:cache

# Create storage link if needed
php artisan storage:link

# Start services
php artisan queue:work --sleep=3 --tries=3 &
php artisan schedule:work &
apache2-foreground 
