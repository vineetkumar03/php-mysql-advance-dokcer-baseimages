FROM php:7.2-apache
LABEL maintainer="VINEET KUMAR"
COPY ./src /app
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
WORKDIR /app
RUN apt-get update
RUN apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
ENV MYSQL_HOST localhost
ENV MYSQL_USERNAME tests
ENV MYSQL_PASSWORD tests
ENV MYSQL_DATABASE register
