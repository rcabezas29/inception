FROM alpine:3.13

RUN apk add mariadb mariadb-client mariadb-common openrc

RUN openrc && touch /run/openrc/softlevel && /etc/init.d/mariadb setup && /etc/init.d/mariadb start

RUN sed -e '/skip-networking/s/^/#/g' -i /etc/my.cnf.d/mariadb-server.cnf

COPY srcs/setup.sh .

RUN chmod -R 777 setup.sh

CMD ./setup.sh && mysqld_safe