FROM php:7.4-apache
RUN apt-get update && apt-get upgrade -y
RUN apt install zip unzip -y
RUN docker-php-ext-install mysqli
EXPOSE 80

COPY conf_server/php.ini /usr/local/etc/php/php.ini
COPY conf_server/apache.conf /usr/local/apache2/conf/httpd.conf

WORKDIR /var/www/html/
COPY . .
RUN chmod +x composer_install.sh
RUN ./composer_install.sh
RUN php composer.phar install