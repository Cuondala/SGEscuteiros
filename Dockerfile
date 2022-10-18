FROM php:8.2-rc-fpm

#definir os argumentos no docker-compose.yml

ARG user
ARG uid


#instala as dependencias do sistema

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libmariadb-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

#limpar o cache

RUN apt-get clean && rm -rf /var/lib/opt/lists/*

#instalar as extensoes do php

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets mysqli
RUN docker-php-ext-enable mysqli


#ultima versao do composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user



RUN pecl install -o -f redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis


# Set working directory
WORKDIR /var/www

USER $user
#instalar redis


