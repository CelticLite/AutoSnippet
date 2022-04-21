FROM php:7.2-apache
RUN apt-get update && apt-get upgrade -y\
 && docker-php-ext-install pdo_mysql \
 && echo "ServerName localhost:80" >> /etc/apache2/apache2.conf
COPY ./testing /var/www/html
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]

