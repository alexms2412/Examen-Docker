FROM php:7.3.3-apache
RUN apt-get update && apt-get install -y
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
EXPOSE 80