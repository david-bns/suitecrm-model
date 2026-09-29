#!/bin/sh
# Point SuiteCRM's system outbound mail at Mailpit, from the root .env.
# SuiteCRM keeps this in the database, not in config.php.
# Run inside the app container (also called by install.sh):
#   docker compose exec -u www-data app .docker/configure-mail.sh
set -e
cd /var/www/html

sql_quote() { printf "'%s'" "$(printf '%s' "$1" | sed "s/'/''/g")"; }

FROM_ADDR=$(sql_quote "${SUITECRM_MAIL_FROM_ADDRESS}")
FROM_NAME=$(sql_quote "${SUITECRM_MAIL_FROM_NAME}")

bin/console dbal:run-sql -q "UPDATE outbound_email SET
    mail_sendtype = 'SMTP',
    mail_smtpserver = $(sql_quote "${SUITECRM_SMTP_HOST}"),
    mail_smtpport = $(sql_quote "${SUITECRM_SMTP_PORT}"),
    mail_smtpauth_req = 0,
    mail_smtpssl = 0,
    smtp_from_addr = ${FROM_ADDR},
    smtp_from_name = ${FROM_NAME}
    WHERE type = 'system' AND deleted = 0"

bin/console dbal:run-sql -q "UPDATE config SET value = ${FROM_ADDR} WHERE category = 'notify' AND name = 'fromaddress'"
bin/console dbal:run-sql -q "UPDATE config SET value = ${FROM_NAME} WHERE category = 'notify' AND name = 'fromname'"

echo "Outbound mail -> ${SUITECRM_SMTP_HOST}:${SUITECRM_SMTP_PORT}"
