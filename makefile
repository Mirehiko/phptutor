docker_php = phptpl_php7_1
docker_nginx = phptpl_nginx_1
docker_mysql = phptpl_mysql_1

#some commands
start: #Containers start
	@sudo docker-compose up -d

stop: #Stop
	@sudo docker-compose stop

show_containers:
	@sudo docker ps

connect_php:
	@sudo docker exec -it $(docker_php) bash

connect_nginx:
	@sudo docker exec -it $(docker_nginx) bash

connect_mysql:
	@sudo docker exec -it $(docker_mysql) bash