FROM debian:buster

RUN apt-get -y update \
    && apt-get -y install unzip wget curl \
    && apt-get -y install php7.3 php7.3-fpm php7.3-mysql php-common php7.3-common php7.3-json php7.3-readline

COPY conf/wp-config.php ./
COPY conf/www.conf /etc/php/7.3/fpm/pool.d
COPY conf/start.sh ./

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

CMD bash /start.sh

EXPOSE 9000
