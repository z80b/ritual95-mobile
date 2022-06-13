start: stop mysql php nginx

stop:
	docker stop $(notdir $(CURDIR))_nginx || true
	#docker rm --force $(notdir $(CURDIR))_nginx || true
	docker stop $(notdir $(CURDIR))_php || true
	#docker rm --force $(notdir $(CURDIR))_php || true
	docker stop $(notdir $(CURDIR))_mysql || true
	#docker rm --force $(notdir $(CURDIR))_mysql || true

mysql:
	docker run -d --rm --name $(notdir $(CURDIR))_mysql \
	-v $(CURDIR)/.docker/db:/var/lib/mysql \
	-v $(CURDIR)/.docker/mysql.cnf:/etc/mysql/my.cnf \
	-e MYSQL_ROOT_PASSWORD=12345 \
	devilbox/mysql:mysql-5.5

php:
	docker run -d --rm --name $(notdir $(CURDIR))_php \
	-v $(CURDIR):/var/www/default/htdocs \
	--link $(notdir $(CURDIR))_mysql:db \
	devilbox/php-fpm-5.2

nginx:
	docker run -d --rm --name $(notdir $(CURDIR))_nginx \
	-v $(CURDIR):/var/www/default/htdocs \
	-v $(CURDIR)/.docker/nginx.conf:/etc/httpd/conf.d/localhost.conf \
	-e PHP_FPM_ENABLE=1 \
	-e PHP_FPM_SERVER_ADDR=$(notdir $(CURDIR))_php \
	-p 3000:80 \
	--link $(notdir $(CURDIR))_php \
	devilbox/nginx-stable
