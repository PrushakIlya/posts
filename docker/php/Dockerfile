FROM php:8.2-fpm-alpine3.17

ARG EXTENTIONS='pdo_mysql sockets xdebug-3.2.0 @composer-2.5.1'

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

EXPOSE 9000

RUN apk update \
    && apk upgrade \
    && chmod +x /usr/local/bin/install-php-extensions \
    && install-php-extensions ${EXTENTIONS} \
    && apk add nano

COPY conf.d/xdebug.ini /usr/local/etc/php/conf.d

WORKDIR /var/www

