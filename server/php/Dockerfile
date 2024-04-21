FROM php:8.3-fpm

WORKDIR /var/www/html

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod 755 /usr/local/bin/install-php-extensions

RUN ls -l /usr/local/bin/install-php-extensions

RUN apt update && apt install -y --no-install-recommends \
    git \
    zip \
    unzip \
    libzip-dev \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    && rm -rf /var/lib/apt/lists/*

RUN /usr/local/bin/install-php-extensions \
    @composer \
    pdo_pgsql \
    zip \
    gd \
    apcu \
    zip \
    intl \
    xdebug \
    pdo_mysql

ENV COMPOSER_ALLOW_SUPERUSER=1