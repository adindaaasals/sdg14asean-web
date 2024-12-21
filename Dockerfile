FROM php:8.1-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libssl1.0.0 \
    libssl-dev \
    unzip \
    git \
    curl

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy all project files
COPY . .

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install project dependencies
RUN composer install --optimize-autoloader --no-dev
