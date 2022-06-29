#!/bin/bash
php artisan down
git stash
git pull
cp env.prod .env

php artisan cache:clear
php artisan config:clear
php artisan event:clear 
php artisan optimize:clear
php artisan route:clear
php artisan view:clear  

#composer update
chown -R www-data.www-data /var/www/html/ &
php artisan up
