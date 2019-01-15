#!/bin/bash

cd /home/vagrant/projekte/symfony4/public

echo "installing bootstrap and jquery via npm:"

npm install bootstrap
npm install jquery

echo "DONE"

echo "creating tables"

php bin/console make:migration
php bin/console doctrine:migrations:migrate

echo "DONE"

echo "restore db-dump"
mysql -uhomestead -psecret symfony_tutorial < ../mysql_backup/symfony_tutorial-201812211410.sql 
echo "DONE"
