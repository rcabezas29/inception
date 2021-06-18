FROM alpine:3.13

RUN apk update && \
	apk add nginx openssl openssh

COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf

RUN chown -R nginx /var/www/localhost/htdocs/

RUN mkdir /run/nginx/ && \
	openssl req -x509 -nodes -days 365 \
    -newkey rsa:2048 -subj "/C=SP/ST=Spain/L=Madrid/O=42/CN=localhost" \
    -out /etc/ssl/certs/nginx-selfsigned.crt \
    -keyout /etc/ssl/private/nginx-selfsigned.key

CMD nginx -g 'daemon off;'