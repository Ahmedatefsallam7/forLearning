FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev \
    default-libmysqlclient-dev \
    libonig-dev \
    libxml2-dev \
    libexif-dev \
    git \
    curl \
    unzip \
    zip \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install \
    pdo_mysql \
    mysqli \
    pcntl \
    bcmath \
    zip \
    exif \
    opcache

RUN pecl install redis && docker-php-ext-enable redis

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u 1000 -d /home/laravel laravel \
    && mkdir -p /home/laravel/.composer

WORKDIR /var/www/html

COPY --chown=laravel:laravel . /var/www/html

USER laravel

RUN composer install --no-interaction --optimize-autoloader


CMD ["php-fpm"]
