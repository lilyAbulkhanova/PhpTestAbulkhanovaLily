FROM php:7.4-cli

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
  && chmod +x composer.phar && mv composer.phar /usr/local/bin/composer
RUN composer --version

RUN apt-get update && apt-get install -y git
RUN docker-php-ext-install mysqli

COPY . /php
WORKDIR /php
