FROM smizy/docker-phpfpm-alpine
MAINTAINER smizy

COPY php-fpm.conf /etc/php/
COPY .user.ini /etc/php/conf.d/
 
RUN wget -O- https://wordpress.org/latest.tar.gz | tar -xvzf - -C /tmp && \
    mv /tmp/wordpress/* /var/www/html/

COPY wp-config.php /var/www/html/
RUN chown nobody /var/www/html/wp-config.php

VOLUME ["/var/www/html"]  


