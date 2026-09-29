#!/bin/sh
# SuiteCRM command-line install, driven by the root .env.
# Run inside the app container:
#   docker compose exec -u www-data app .docker/install.sh
set -e
cd /var/www/html

if [ -f .env.local ]; then
    echo ".env.local exists: SuiteCRM is already installed." >&2
    echo "Remove .env.local and public/legacy/config.php to reinstall." >&2
    exit 1
fi

bin/console suitecrm:app:install -n \
    -U "${DB_USER}" -P "${DB_PASSWORD}" -H db -Z 3306 -N "${DB_NAME}" \
    -u "${SUITECRM_ADMIN_USER}" -p "${SUITECRM_ADMIN_PASSWORD}" \
    -S "${SITE_URL}" -d "${SUITECRM_DEMO_DATA}"

# The installer writes DATABASE_URL to .env.local; the root .env already
# defines it from the DB_* variables, so keep only the generated APP_SECRET.
# (.env.local must stay: SuiteCRM checks its presence to know it is installed.)
sed -i '/^DATABASE_URL=/d' .env.local

.docker/configure-mail.sh
