FROM php:8.2-apache
# Install dependencies

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY Src/ /var/www/html/
