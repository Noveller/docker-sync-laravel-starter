FROM php:7.3-fpm

RUN apt-get update -qq \
&& docker-php-ext-install mysqli pdo pdo_mysql

RUN apt-get update -qq \
    && apt-get install -qy --no-install-recommends \
        git \
        openssl \
        librecode0 \
        uuid-dev \
        libmagickwand-dev \
        libsasl2-dev \
        imagemagick \
        libmagickwand-dev \
        libmagickcore-dev \
        libsqlite3-0 \
        libxml2


RUN apt-get update -qq \
    && apt-get install -qy --no-install-recommends \
        autoconf \
        file \
        g++ \
        gcc \
        libc-dev \
        make \
        cmake \
        curl \
        pkg-config \
        libtool \
        tar \
        libmcrypt-dev \
        libpng-dev \
        zip \
        unzip \
        wget


# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install
#FROM php:7.1-fpm
#RUN apt-get update \
#&& docker-php-ext-install pdo pdo_mysql


