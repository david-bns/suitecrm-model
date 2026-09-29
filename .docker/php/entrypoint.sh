#!/bin/sh
set -e

# libcurl resolves *.localhost to loopback without asking DNS, so server-side
# calls to the public URL (install checks, API self-calls) hit this container.
# Relay loopback:443 to the Traefik container (TLS passes through untouched).
if [ -n "${PROXY_HOST}" ]; then
    socat TCP-LISTEN:443,bind=127.0.0.1,fork,reuseaddr "TCP:${PROXY_HOST}:443" &
fi

exec docker-php-entrypoint "$@"
