#!/bin/sh

if [ "$1" = "travis" ]; then
    psql -U postgres -c "CREATE DATABASE dragaliafound_test;"
    psql -U postgres -c "CREATE USER dragaliafound PASSWORD 'dragaliafound' SUPERUSER;"
else
    sudo -u postgres dropdb --if-exists dragaliafound
    sudo -u postgres dropdb --if-exists dragaliafound_test
    sudo -u postgres dropuser --if-exists dragaliafound
    sudo -u postgres psql -c "CREATE USER dragaliafound PASSWORD 'dragaliafound' SUPERUSER;"
    sudo -u postgres createdb -O dragaliafound dragaliafound
    sudo -u postgres psql -d dragaliafound -c "CREATE EXTENSION pgcrypto;" 2>/dev/null
    sudo -u postgres createdb -O dragaliafound dragaliafound_test
    sudo -u postgres psql -d dragaliafound_test -c "CREATE EXTENSION pgcrypto;" 2>/dev/null
    LINE="localhost:5432:*:dragaliafound:dragaliafound"
    FILE=~/.pgpass
    if [ ! -f $FILE ]; then
        touch $FILE
        chmod 600 $FILE
    fi
    if ! grep -qsF "$LINE" $FILE; then
        echo "$LINE" >> $FILE
    fi
fi
