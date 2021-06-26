FROM php:7.4-fpm
RUN 
RUN apt-get update \
    && apt-get install -y libwebp-dev libjpeg-dev libpng-dev libfreetype6-dev \
    && docker-php-ext-install gd \
    && docker-php-ext-install mysqli
USER 1000:1000
