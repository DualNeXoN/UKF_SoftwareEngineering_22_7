FROM php:8.1-fpm

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt update && \
    apt-get install -y git

WORKDIR /var/www/html

COPY ./src ./

RUN chmod 777 -R ./storage