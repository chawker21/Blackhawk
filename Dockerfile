# Use a base image for PHP 8.2 and Composer
FROM laravelsail/php82-composer:latest

# Install git
RUN apt-get update -y && apt-get install -y git

# Set environment variable to allow Composer to run as superuser
ENV COMPOSER_ALLOW_SUPERUSER=1

# Set working directory in the container
WORKDIR /var/www

# Clone the Laravel project from GitHub into /var/www/Blackhawk
RUN git clone https://github.com/chawker21/Blackhawk /var/www/Blackhawk

# Change working directory to Laravel project
WORKDIR /var/www/Blackhawk

# Run Composer to install dependencies (ensure composer.json exists in the project directory)
RUN composer install --no-scripts --no-interaction

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]