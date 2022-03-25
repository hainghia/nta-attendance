FROM php:8.1.4-fpm

# Install nodejs
RUN curl -sL https://deb.nodesource.com/setup_16.x -o nodesource_setup.sh && bash nodesource_setup.sh && apt-get -y --force-yes install nodejs

#Yarn
# Installing Yarn
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - && \
    echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list && \
    apt-get update && apt-get install -y yarn

# Install Git and PHP Extensions
RUN set -eux \
 && apt-get update && apt-get install -y git autoconf g++ libtool make libzip-dev libpng-dev libjpeg-dev libmagickwand-dev libfreetype6-dev unzip \
 && docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/ \
 && docker-php-ext-configure opcache --enable-opcache \
 && pecl install imagick \
 && docker-php-ext-enable imagick \
 && docker-php-ext-install opcache bcmath pdo_mysql gd exif zip  \
 && apt-get clean \
 && rm -rf /var/lib/apt/lists

# Install composer
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN set -eux \
WORKDIR /var/www/laravel

