FROM php:8.1-rc-apache

RUN apt-get update && apt-get install cowsay -y

ENV PATH="/usr/games:${PATH}"

COPY vhost.conf /etc/apache2/sites-enabled/000-default.conf

RUN a2enmod rewrite
RUN docker-php-ext-install pdo pdo_mysql