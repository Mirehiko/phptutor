FROM php:7.2-fpm

RUN apt-get update && \
	apt-get install -y mysql-client && \
	docker-php-ext-install pdo_msql
	# apt-get install -y --no-install-recommends uwsgi-plugin-php

    
WORKDIR "/application"