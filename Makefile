# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rcabezas <rcabezas@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/05/17 19:45:39 by rcabezas          #+#    #+#              #
#    Updated: 2021/06/21 16:57:54 by rcabezas         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

all:
	@mkdir -p /home/rcabezas/data/db
	@mkdir -p /home/rcabezas/data/wordpress
	@docker build -t mariadb_rcabezas ./srcs/requirements/mariadb/ 
	@docker build -t wordpress_rcabezas ./srcs/requirements/wordpress/
	@docker build -t nginx_rcabezas ./srcs/requirements/nginx/
	@docker-compose -f ./srcs/docker-compose.yaml up -d

fclean:
	@docker-compose -f ./srcs/docker-compose.yaml stop
	@docker system prune -af
	@docker volume rm srcs_db srcs_wordpress -f
	@docker volume prune -f

re: fclean all

.PHONY: all fclean re
