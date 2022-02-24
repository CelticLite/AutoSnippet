FROM php:7.3-rc-fpm-alpine
RUN apk update; \
    apk upgrade;
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql
RUN docker-php-ext-install pgsql
COPY php.ini-development /usr/local/etc/php/php.ini
