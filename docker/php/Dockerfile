FROM php:8.1-alpine

RUN apk add --no-cache $PHPIZE_DEPS 

WORKDIR /usr/src/myapp

CMD ["php","-S","0.0.0.0:8000"]