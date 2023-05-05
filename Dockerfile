FROM php:7.4-fpm as base

RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-configure opcache --enable-opcache && docker-php-ext-install opcache
