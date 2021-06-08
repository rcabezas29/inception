FROM alpine:3.13

RUN apk update && \
	apk add openrc lighttpd php7 php7-fpm php7-common php7-session php7-iconv php7-json \
    php7-gd php7-curl php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo \
    php7-pdo_mysql php7-soap php7-xmlrpc php7-posix php7-mcrypt php7-gettext \
    php7-ldap php7-ctype php7-dom mariadb-client

COPY /srcs/wp-config.php /tmp

RUN sed -i '/include "mod_fastcgi.conf"/s/^#//g' /etc/lighttpd/lighttpd.conf

RUN mkdir /run/openrc; touch /run/openrc/softlevel

RUN mkdir /run/lighttpd && chmod -R 777 /run/lighttpd

RUN mkdir -p /usr/share/webapps/ && \
	wget http://wordpress.org/latest.tar.gz && tar -xzvf latest.tar.gz && \
	rm latest.tar.gz && \
	mv /wordpress /usr/share/webapps/ && \
	mv /tmp/wp-config.php /usr/share/webapps/wordpress/ && \
	chown -R lighttpd /usr/share/webapps/ && \
	rm -rf /var/www/localhost/htdocs/ && \
	ln -s /usr/share/webapps/wordpress /var/www/localhost/htdocs

CMD openrc && rc-service lighttpd start && tail -f /var/log/lighttpd/*.log
