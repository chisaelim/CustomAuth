#!/bin/bash
set -e

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Install dependencies without production optimizations
composer install
wait $!

npm install
wait $!

# Generate key and run migrations first

php artisan db:wipe --force
wait $!

php artisan key:generate --force
wait $!

php artisan migrate --force
wait $!

php artisan db:seed --force
wait $!

# THEN clear caches (this preserves the built assets)
php artisan optimize:clear

# Create storage link if needed
php artisan storage:link

# Start services
php artisan queue:work --sleep=3 --tries=3 &
php artisan schedule:work &
npm run dev &
apache2-foreground
