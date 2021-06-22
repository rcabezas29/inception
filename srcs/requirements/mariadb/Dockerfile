FROM alpine:3.13

RUN apk add mariadb mariadb-client mariadb-common openrc

RUN openrc && touch /run/openrc/softlevel && /etc/init.d/mariadb setup && /etc/init.d/mariadb start

RUN sed -e '/skip-networking/s/^/#/g' -i /etc/my.cnf.d/mariadb-server.cnf

COPY srcs/setup.sh .

COPY srcs/env_setup.sh .

RUN chmod -R 777 setup.sh && chmod -R 777 env_setup.sh

CMD ./env_setup.sh && ./setup.sh && mysqld_safe
