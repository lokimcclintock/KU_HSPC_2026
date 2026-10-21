#!/usr/bin/env sh

rm /var/www/html/index.html
cp -r www/html /var/www
read -p "Password for user db: " pw
mariadb -u root -e "CREATE USER db@localhost IDENTIFIED BY \"$pw\";"
mariadb -u root -p ku_hspc_2026 < www/db.sql
mariadb -u root -e "grant all privileges on ku_hspc_2026.* TO \"db\" identified by \"$pw\";"
