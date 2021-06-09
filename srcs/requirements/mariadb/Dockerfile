FROM alpine:3.13

RUN apk add mariadb mariadb-client mariadb-common openrc

RUN openrc && touch /run/openrc/softlevel && /etc/init.d/mariadb setup && /etc/init.d/mariadb start

COPY srcs/setup.sh .

RUN chmod +x setup.sh

CMD ./setup.sh && tail -f /var/log/mysql/*
