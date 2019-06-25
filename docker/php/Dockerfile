FROM php:7.3-fpm-alpine

USER root

COPY ./auth.json /root/.composer/auth.json

WORKDIR /var/www/html

RUN apk add shadow && usermod -u 1000 www-data && groupmod -g 1000 www-data

#INSTALL GD AND OPCACHE
RUN /bin/sh -c "apk add --no-cache libpng-dev freetype-dev libjpeg-turbo-dev pcre-dev libzip-dev openssl-dev vsftpd git"
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd opcache pdo_mysql zip ftp

#INSTALL /bin/bash
RUN /bin/sh -c "apk add --no-cache bash"

COPY ./entrypoint.sh /etc/entrypoint.sh
RUN chmod +x /etc/entrypoint.sh

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"                                                                                                                                                                                                          \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"    \
    && php composer-setup.php                                                                                                                                                                                                                                                          \         
    && php -r "unlink('composer-setup.php');"                                                                                                                                                                                                                                         

RUN mv composer.phar /usr/local/bin/composer

RUN wget -O drush.phar https://github.com/drush-ops/drush-launcher/releases/download/0.6.0/drush.phar   \
    && chmod +x drush.phar                                                                              \
    && mv drush.phar /usr/local/bin/drush

USER www-data

CMD ["php-fpm"]
ENTRYPOINT ["/etc/entrypoint.sh"]