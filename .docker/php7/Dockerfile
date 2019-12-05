FROM php:7.3-fpm

RUN apt-get update

RUN apt-get install -y \
        git \
        libzip-dev \
        unzip \
        && docker-php-ext-install zip

#Baixa o Composer
RUN curl https://getcomposer.org/composer.phar --output /usr/bin/composer

RUN chmod +x /usr/bin/composer
WORKDIR /php7