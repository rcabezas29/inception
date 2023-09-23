FROM alpine:3.13

RUN apk update && \
	apk add openrc php7 wget php7-fpm php7-common php7-session php7-iconv php7-json \
    php7-gd php7-curl php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo \
    php7-pdo_mysql php7-soap php7-xmlrpc php7-posix php7-mcrypt php7-gettext \
    php7-ldap php7-ctype php7-dom mariadb-client

COPY /srcs/wp-config.php /tmp

COPY /srcs/env_setup.sh ./

RUN sed -e '/skip-networking/s/^/#/g' -i /etc/my.cnf.d/mariadb-server.cnf

RUN sed -e '/listen =/s/127.0.0.1/0.0.0.0/g' -i /etc/php7/php-fpm.d/www.conf

RUN mkdir -p /var/www/localhost/htdocs && \
    chmod -R 755 /var/www/localhost/htdocs

RUN mkdir -p /usr/share/webapps/ && \
	wget http://wordpress.org/latest.tar.gz && tar -xzvf latest.tar.gz && \
	rm latest.tar.gz && \
	mv /wordpress /usr/share/webapps/ && \
	mv /tmp/wp-config.php /usr/share/webapps/wordpress/ && \
	rm -rf /var/www/localhost/htdocs/ && \
	ln -s /usr/share/webapps/wordpress /var/www/localhost/htdocs

RUN chmod -R 777 env_setup.sh

CMD ./env_setup.sh && openrc && touch /run/openrc/softlevel && rc-service php-fpm7 restart && php-fpm7 --nodaemonize
