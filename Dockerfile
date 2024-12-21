FROM php:8.1-apache

# Install required dependencies
RUN apt-get update && apt-get install -y libssl1.0.0 libssl-dev

# Copy Laravel files to container
COPY . /var/www/html

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Set working directory
WORKDIR /var/www/html
