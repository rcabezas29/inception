/usr/bin/mysqld --user=mysql --datadir=/var/lib/mysql --plugin-dir=/usr/lib/mariadb/plugin --pid-file=/run/mysqld/mariadb.pid --port=3306 --log-error=/var/log/mysqld.log --log-warnings=4 --skip-networking=0

mysql -e "CREATE DATABASE wp_db;"
mysql -e "CREATE USER 'rcabezas'@'%' IDENTIFIED BY 'password';"
mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'rcabezas'@'%';"
mysql -e "FLUSH PRIVILEGES;"