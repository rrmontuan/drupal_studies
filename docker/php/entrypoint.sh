#!/bin/bash

mkdir -p /var/www/html/sites/default/files
chmod -R 777 /var/www/html/sites/default/files

if [ ! -e /vendor ]
then
    composer install
fi

echo ""
echo "--------------------------------------"
echo "----- Seu container está pronto! -----"
echo "--------------------------------------"
echo ""
echo "Acesse pela URL http://$(hostname -i)"
echo ""

exec "$@"