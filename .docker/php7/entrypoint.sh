#!/bin/bash
if [ ! -d "vendor" ] ; then
    composer global require/prestissimo
    composer install
fi
php-fpm