FROM daocloud.io/php:5.6-apache
RUN apt-get update && apt-get install -y libapache2-mod-php5 mysql-client php5-cli php5-mysql php5-gd
COPY src/ /var/www/html/