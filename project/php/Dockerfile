FROM php:7.1.23-apache
RUN apt-get update
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql
RUN docker-php-ext-install pgsql
COPY ./testing /var/www/html
RUN echo "ServerName localhost:80" >> /etc/apache2/apache2.conf
COPY php.ini-development /usr/local/etc/php/php.ini
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]

