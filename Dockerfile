# Usa la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl libpng-dev libonig-dev libxml2-dev libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd

# Habilita mod_rewrite para Laravel
RUN a2enmod rewrite

# Cambia DocumentRoot para que Apache sirva desde public/
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf

# Copia los archivos del proyecto
COPY . /var/www/html

# Establece permisos para www-data (usuario apache)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Define el directorio de trabajo
WORKDIR /var/www/html

# Copia Composer desde la imagen oficial y instala dependencias
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala las dependencias de Laravel (sin dev)
RUN composer install --no-dev --optimize-autoloader

# Expone el puerto 80
EXPOSE 80

# Ejecuta Apache en primer plano
CMD ["apache2-foreground"]
