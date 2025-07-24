#!/bin/bash
composer install --optimize-autoloader
php artisan key:generate
php artisan storage:link
php artisan serve --host=0.0.0.0 --port=$PORT
chmod +x start.sh
