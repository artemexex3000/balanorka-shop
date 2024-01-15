FROM nginx:stable-alpine

# Global variables
ENV NGINXUSER=laravel
ENV NGINXGROUP=laravel

# Nginx root
RUN mkdir -p /var/www/html

# Add local config from local host to docker container
ADD nginx/default.conf /etc/nginx/conf.d/default.conf

# Edit nginx.conf in docker container
RUN sed -i "s/user www-data/user ${NGINXUSER}/g" /etc/nginx/nginx.conf

# Add user and group
RUN adduser -g ${NGINXGROUP} -s /bin/sh -D ${NGINXUSER}
