rc-service mariadb restart
sleep 3

mysql -e "CREATE DATABASE wp_db;"
mysql -e "CREATE USER 'rcabezas'@'%' identified by 'rcabezas';"
mysql -e "GRANT ALL PRIVILEGES ON wp_db.* TO 'rcabezas'@'%';"
mysql -e "FLUSH PRIVILEGES;"