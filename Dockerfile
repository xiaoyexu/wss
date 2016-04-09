FROM daocloud.io/php:5.6-apache
RUN apt-get install php5-mysql
RUN apt-get install php5-gd
COPY src/ /var/www/html/