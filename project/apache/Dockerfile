FROM httpd:2.4.35-alpine
RUN apk update; \
    apk upgrade; \
    apk add OpenSSL; \ 
    openssl genrsa -out /usr/local/apache2/cert/private.key; \
    openssl req -new -key private.key -out /usr/local/apache2/cert/ca_bundle.crt; \ 
    openssl x509 -req -days 365 -in request.csr -signkey private.key -out /usr/local/apache2/cert/certificate.crt; 

COPY ./apache.conf /usr/local/apache2/conf/httpd.conf
EXPOSE 80
EXPOSE 443 
