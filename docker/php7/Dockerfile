#/bin/sh
FROM php:7.2-fpm
# FROM php:7.2-apache

RUN apt-get update 
	# && mysql-client
	# && docker-php-ext-install \
	# && pdo_mysql \
	# && rewrite
	# && apt-get install -y \
	# apt-get install -y --no-install-recommends uwsgi-plugin-php

RUN usermod -u 1000 www-data
RUN usermod -G staff www-data 

WORKDIR "/application"
