FROM daocloud.io/php:5.6-apache
RUN apt-get update && apt-get install -y mysql-client php5-cli php5-mysql php5-gd
RUN docker-php-ext-install mysql
RUN docker-php-ext-install pod_mysql
COPY src/ /var/www/html/