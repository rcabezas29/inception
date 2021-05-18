FROM alpine:3.7

RUN apk add mariadb mariadb-client mariadb-common openrc

RUN openrc && touch /run/openrc/softlevel

RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql

CMD /etc/init.d/mariadb setup && /etc/init.d/mariadb start