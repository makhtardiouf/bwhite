#!/bin/bash
git stash
git pull
cp env.prod .env
chown -R www-data.www-data /var/www/html/ &
