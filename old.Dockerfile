#syntax=docker/dockerfile:1.4

FROM mlocati/php-extension-installer:latest AS php_extension_installer

FROM php:8.2-alpine
FROM node:18-alpine

WORKDIR /srv/app

COPY --from=php_extension_installer --link /usr/bin/install-php-extensions /usr/local/bin/

RUN set -eux; \
    /usr/bin/install-php-extensions pdo pdo_mysql intl zip apcu opcache

RUN apk add --no-cache $PHPIZE_DEPS git 
RUN apk add --no-cache build-base zsh shadow

# Symfony cli
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.alpine.sh' | sh
RUN apk add symfony-cli

RUN sh -c "$(curl -fsSL https://raw.github.com/ohmyzsh/ohmyzsh/master/tools/install.sh)"

COPY ./ ./

EXPOSE 80
RUN npm install
RUN composer install
RUN composer dump-autoload --optimize --classmap-authoritative
CMD ["symfony", "serve", "--no-tls", "--allow-http", "--port=80"]

