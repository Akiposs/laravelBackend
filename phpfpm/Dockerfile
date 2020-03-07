FROM php:7.4.3-fpm-alpine3.11

COPY ./phpfpm/initialize/php.ini /etc/php7
COPY ./phpfpm/initialize/php-fpm.conf /usr/local/etc


RUN apk --no-cache update && \
  apk --no-cache add \
  sudo \
  vim \
  composer

CMD [ "/bin/sh" ]
