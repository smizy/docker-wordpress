# Wordpress (nginx + php-fpm + mysql + letsencrypt) on docker

Create https wordpress site in single docker host.

## Prerequisite
- docker-machine create ... 
- confirm to set dns record  
 
## create CA

```
$ eval $(docker-machine env wordpress)
$ docker-machine ssh wordpress "sudo mkdir /letsencrypt-webroot && sudo chown -R 100 /letsencrypt-webroot"
$ docker-machine ssh wordpress sudo openssl dhparam -out /etc/ssl/private/dhparam.pem 2048

$ sed -i -e 's/<YOUR_FQDN>/sub.example.com/g'  letsencrypt/server.conf web/server.conf web/ssl.conf 
$ export LETSENCRYPT_DOMAINS=sub.example.com
$ export LETSENCRYPT_EMAIL=operator@example.com

$ docker-compose -f letsencrypt/docker-compose.yml up -d --no-deps web
$ docker-compose -f letsencrypt/docker-compose.yml run --rm  letsencrypt
 :
 :
$ docker-compose -f letsencrypt/docker-compose.yml stop
$ docker-compose -f letsencrypt/docker-compose.yml rm -f web
```

## start wordpress

```
$ export MYSQL_DATABASE=******;
$ export MYSQL_USER=******;
$ export MYSQL_PASSWORD=******;
$ export MYSQL_HOST=mysql

docker-compose up -d
```

open https://sub.example.com/admin/install.php
