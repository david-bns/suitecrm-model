#!/bin/sh
# Install PHP dependencies from composer.lock (vendor/ is not versioned).
# Run inside the app container, also done automatically on first start:
#   docker compose exec -u www-data app .docker/composer-install.sh
set -e
cd /var/www/html

composer install --no-dev --optimize-autoloader --no-interaction

# The post-install cleanup (Google\Task\Composer::cleanup) removes unused Google
# services after the autoloader was dumped: dump it again so it matches.
composer dump-autoload --optimize --no-dev --no-interaction
