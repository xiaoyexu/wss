FROM daocloud.io/php:5.6-apache
RUN apt-get update && apt-get install -y php5-mysql php5-gd
COPY src/ /var/www/html/