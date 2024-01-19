FROM php:8.2.14-fpm

RUN set -x && \
    apt-get update && \
    apt-get install -y libicu-dev wget zip unzip wget

RUN docker-php-ext-install intl pdo_mysql mysqli

RUN apt-get install -y zlib1g-dev libpng-dev
RUN docker-php-ext-install -j$(nproc) gd

COPY get_composer.sh /tmp/
RUN set -x && chmod 777 /tmp/get_composer.sh && /tmp/get_composer.sh

WORKDIR /usr/share/nginx/html