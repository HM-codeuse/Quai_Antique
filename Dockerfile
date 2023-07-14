FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install intl zip pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --version=2.5.4 --install-dir=/usr/local/bin --filename=composer

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN echo "date.timezone = UTC" >> "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html
COPY . .

RUN rm -rf var/cache/*
RUN composer install

RUN composer dump-autoload --optimize --classmap-authoritative

RUN chown -R www-data:www-data /var/www/html/var

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
