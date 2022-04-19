FROM php:7.2-apache
ENV http_proxy=http:...
COPY ./tmpFiles/libpq-dev/tmp_libpq-dev/ /tmp/.
COPY ./libpq-dev-installer.sh /tmp/libpq-dev-installer.sh 
RUN chmod +x /tmp/libpq-dev-installer.sh \
 && /tmp/libpq-dev-installer.sh \
 && apt-get update \
 #&& apt-get install -y libpq-dev \
 && docker-php-ext-install pdo pdo_pgsql pgsql \
 && echo "ServerName localhost:80" >> /etc/apache2/apache2.conf
COPY ./testing /var/www/html
COPY php.ini-development /usr/local/etc/php/php.ini
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]

