FROM php:7.1.23-apache
ENV http_proxy=http:...
RUN apt-get update
RUN apt-get upgrade -y
COPY ./libpq-dev_files/ /tmp/libpq-dev_files/
COPY ./install_libpq_dev.sh /tmp/.
RUN chmod +x /tmp/install_libpq_dev.sh
RUN /tmp/install_libpq_dev.sh
RUN docker-php-ext-configure pgsql
RUN docker-php-ext-install pdo pdo_pgsql pgsql
COPY ./testing /var/www/html
RUN echo "ServerName localhost:80" >> /etc/apache2/apache2.conf
COPY php.ini-development /usr/local/etc/php/php.ini
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]

