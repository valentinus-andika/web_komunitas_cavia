FROM php:8.2-apache
WORKDIR /var/www/html
COPY . .
RUN apt-get update && apt-get install -y \
    git zip unzip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer install --no-dev && \
    chown -R www-data:www-data /var/www/html
EXPOSE 80
CMD ["apache2-foreground"]
