# Use an official PHP image as a base
FROM php:8.3-fpm

# Create a non-root user and group
RUN groupadd -g 1000 appuser && useradd -u 1000 -ms /bin/bash -g appuser appuser

# Set the working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . /var/www/html

# Set permissions (optional, but usually necessary)
RUN chown -R appuser:appuser /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Switch to the non-root user
USER appuser

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]