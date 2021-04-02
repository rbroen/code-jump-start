FROM php:7.4-apache

## Update package information
RUN apt-get update

RUN apt-get install --yes libzip-dev unzip \
    && docker-php-ext-install zip

# Configure Apache
RUN a2enmod rewrite

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html


