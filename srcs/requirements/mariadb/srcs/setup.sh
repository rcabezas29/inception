rc-service mariadb restart
sleep 3

mysql -e "SET GLOBAL general_log=1;"
mysql -e "SET GLOBAL general_log_file='/var/log/mysql/mariadb.log';"
mysql -e "CREATE DATABASE wp_db;"
mysql -e "CREATE USER 'rcabezas'@'%' IDENTIFIED BY 'password';"
mysql -e "GRANT ALL PRIVILEGES ON wp_db.* TO 'rcabezas'@'%';"
mysql -e "FLUSH PRIVILEGES;"