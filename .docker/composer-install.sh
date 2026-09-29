#!/bin/sh
# Install PHP dependencies from composer.lock (vendor/ is not versioned).
# Run inside the app container, also done automatically on first start:
#   docker compose exec -u www-data app .docker/composer-install.sh
set -e
cd /var/www/html

# Dev dependencies (phpunit, phpstan...) unless COMPOSER_NO_DEV=1, a variable
# composer reads itself (set in the root .env).
composer install --optimize-autoloader --no-interaction

# The post-install cleanup (Google\Task\Composer::cleanup) removes unused Google
# services after the autoloader was dumped: dump it again so it matches.
composer dump-autoload --optimize --no-interaction
