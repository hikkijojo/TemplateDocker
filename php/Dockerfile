
FROM php:8.2.2-fpm-alpine

COPY php.ini $PHP_INI_DIR/conf.d/
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN install-php-extensions redis mysqli xdebug