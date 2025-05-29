FROM php:8.0-apache

# Install PostgreSQL extension
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copy application source code
COPY src/ /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/ 

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80