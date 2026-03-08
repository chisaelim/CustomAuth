FROM php:8.4-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install required Linux libraries
RUN apt-get update -y && apt-get install -y \
    libicu-dev \
    libmariadb-dev \
    unzip zip \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libzip-dev \
    mariadb-client

# Install PHP extensions
RUN docker-php-ext-install gettext intl pdo_mysql gd pcntl zip

# Configure GD extension with FreeType and JPEG support
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Configure PHP upload settings optimized for 4GB VPS
RUN echo "upload_max_filesize = 50M" >> /usr/local/etc/php/conf.d/uploads.ini && \
    echo "post_max_size = 55M" >> /usr/local/etc/php/conf.d/uploads.ini && \
    echo "max_execution_time = 120" >> /usr/local/etc/php/conf.d/uploads.ini && \
    echo "max_input_time = 120" >> /usr/local/etc/php/conf.d/uploads.ini && \
    echo "memory_limit = 256M" >> /usr/local/etc/php/conf.d/uploads.ini && \
    echo "max_file_uploads = 20" >> /usr/local/etc/php/conf.d/uploads.ini && \
    echo "file_uploads = On" >> /usr/local/etc/php/conf.d/uploads.ini

# Set Apache document root to /var/www/html/public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy Composer and NodeJS from their official images
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY --from=node:latest /usr/local /usr/local

# Copy project files
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html


RUN find /var/www/html -type d -exec chmod 755 {} \;
RUN find /var/www/html -type f -exec chmod 644 {} \;
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache /var/www/html/storage
RUN chmod +x /var/www/html/*.sh && \
    chown www-data:www-data /var/www/html/*.sh