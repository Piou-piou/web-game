FROM php:8.4-fpm-alpine

# Installation des dépendances système nécessaires pour Symfony et les extensions PHP
RUN apk add --no-cache \
    acl \
    fcgi \
    file \
    gettext \
    git \
    icu-dev \
    libzip-dev \
    zip \
    bash

# Installation des extensions PHP courantes pour Symfony
RUN docker-php-ext-configure intl && docker-php-ext-install \
    intl \
    opcache \
    pdo \
    pdo_mysql \
    zip

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configuration du dossier de travail
WORKDIR /srv/app

# Optionnel : Permissions pour Linux (l'utilisateur www-data est ID 82 sur Alpine)
# Si vous avez des problèmes de permissions sur Linux, décommentez ceci :
# RUN chown -R www-data:www-data /srv/app
