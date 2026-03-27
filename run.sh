#!/bin/bash

SCRIPT_DIR=$(cd -- "$(dirname -- "$0")" &> /dev/null && pwd)

APP_PATH="$SCRIPT_DIR/php-doc-sandbox.php"

PHP_BIN=$(command -v php)

if [ -z "$PHP_BIN" ]; then
    echo "Error: PHP is not installed. Please install it to run the application."
    exit 1
fi

if [ ! -f "$APP_PATH" ]; then
    echo "Error: Application file '$APP_PATH' not found."
    exit 1
fi

"$PHP_BIN" "$APP_PATH" "$@"