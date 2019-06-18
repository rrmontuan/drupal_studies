FROM nginx:1.17-alpine

WORKDIR /var/www/html

RUN apk add shadow && usermod -u 1000 nginx && groupmod -g 1000 nginx