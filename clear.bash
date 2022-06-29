#!/bin/bash
php artisan cache:clear
php artisan config:clear
php artisan event:clear 
php artisan optimize:clear
php artisan route:clear
php artisan view:clear  
