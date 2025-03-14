FROM php:8.2-fpm-alpine

WORKDIR /var/www/block-app

RUN docker-php-ext-install pdo pdo_mysql
