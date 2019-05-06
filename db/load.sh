#!/bin/sh

BASE_DIR=$(dirname "$(readlink -f "$0")")
if [ "$1" != "test" ]; then
    psql -h localhost -U dragaliafound -d dragaliafound < $BASE_DIR/dragaliafound.sql
fi
psql -h localhost -U dragaliafound -d dragaliafound_test < $BASE_DIR/dragaliafound.sql
