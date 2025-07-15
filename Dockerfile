FROM php:7.4.6-cli

# Instala extensões necessárias para o Laravel + Composer
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instala o Composer 1.10.7
RUN curl -sS https://getcomposer.org/download/1.10.7/composer.phar -o /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

WORKDIR /var/www

CMD ["bash"]
