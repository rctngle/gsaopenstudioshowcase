FROM php:8.1-fpm

# Install dependencies
RUN apt-get update \
  && apt-get install -y \
    cron \
    libfreetype6-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libxslt1-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    ghostscript

# Install required PHP extensions
RUN docker-php-ext-install \
  gd \
  intl \
  mysqli \
  pdo_mysql \
  xsl \
  zip \
  soap \
  opcache \
  dom

RUN apt-get update && apt-get install -y \
  libmagickwand-dev --no-install-recommends

RUN pecl install imagick && docker-php-ext-enable imagick


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
