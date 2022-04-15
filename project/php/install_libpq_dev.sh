#!/usr/bin/env bash 
# You are missing parent folders, create them:
mkdir -p /usr/lib/x86_64-linux-gnu/pkgconfig
mkdir -p /usr/share/doc/libpq-dev
mkdir -p /usr/share/man/man1


cp /tmp/libpq-dev_files/pg_config /usr/bin/pg_config
cp -r /tmp/libpq-dev_files/postgresql/ /usr/include/.
cp /tmp/libpq-dev_files/libpq.a /usr/lib/x86_64-linux-gnu/libpq.a 
cp /tmp/libpq-dev_files/libpq.so /usr/lib/x86_64-linux-gnu/libpq.so
cp /tmp/libpq-dev_files/libpq.pc /usr/lib/x86_64-linux-gnu/pkgconfig/libpq.pc
cp /tmp/libpq-dev_files/changelog.Debian.gz /usr/share/doc/libpq-dev/changelog.Debian.gz
cp /tmp/libpq-dev_files/copyright /usr/share/doc/libpq-dev/copyright
cp /tmp/libpq-dev_files/pg_config.1.gz /usr/share/man/man1/pg_config.1.gz
