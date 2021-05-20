# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rcabezas <rcabezas@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/05/17 19:45:39 by rcabezas          #+#    #+#              #
#    Updated: 2021/05/20 20:23:07 by rcabezas         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

all:
	@docker build -t nginx_rcabezas ./srcs/requirements/nginx/
	@docker build -t mariadb_rcabezas ./srcs/requirements/mariadb/
	@docker build -t wordpress_rcabezas ./srcs/requirements/mariadb/
	@docker run -d -p 443:443 nginx_rcabezas
	@docker run -d mariadb_rcabezas
	@docker run -d wordpress_rcabezas
	@docker-compose up

fclean:
	@docker-compose down
	@docker system prune -a

re: fclean all

.PHONY: all fclean re