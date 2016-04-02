FROM php:7-apache

MAINTAINER Ayman Nedjmeddine "theycallmethedr@gmail.com"

RUN apt-get update && apt-get install -y sqlite3 libsqlite3-dev \
    && docker-php-ext-install -j`cat /proc/cpuinfo | grep 'core id' | wc -l` pdo pdo_mysql pdo_sqlite
