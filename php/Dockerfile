FROM php:7.4.3-fpm-alpine3.11

COPY ./php/php.ini /etc/php7/

RUN apk --no-cache update && \
  apk --no-cache add \
  sudo \
  vim \
  composer

CMD [ "/bin/sh" ]
