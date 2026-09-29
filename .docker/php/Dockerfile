FROM php:8.3.26-apache-bookworm

# Extensions required by SuiteCRM 8 (see composer.json "require" / "suggest")
ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/download/2.9.10/install-php-extensions /usr/local/bin/
RUN install-php-extensions \
        bcmath \
        gd \
        imap \
        intl \
        ldap \
        mysqli \
        opcache \
        pdo_mysql \
        soap \
        zip

# Run Apache as the host user so bind-mounted files stay writable on both sides
ARG UID=1000
ARG GID=1000
RUN groupmod -o -g ${GID} www-data \
    && usermod -o -u ${UID} -g ${GID} www-data

RUN a2enmod rewrite headers expires

COPY apache/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY php/php.ini /usr/local/etc/php/conf.d/zz-suitecrm.ini

WORKDIR /var/www/html
