FROM php:7.3-rc-fpm-alpine
RUN apk update; \
    apk upgrade;
RUN docker-php-ext-install pgsql
COPY php.ini /usr/local/etc/php/php.ini