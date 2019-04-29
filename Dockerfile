FROM php:7.3-apache 
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql


FROM php:5.6-apache

RUN docker-php-ext-install pdo pdo_mysql
COPY my-php-files/ /var/www/html/