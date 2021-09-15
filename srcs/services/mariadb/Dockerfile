FROM debian:buster

RUN apt-get -y update \
    && apt-get install -y mariadb-server mariadb-client

COPY conf/start.sh ./
RUN rm /etc/mysql/mariadb.conf.d/50-server.cnf
COPY conf/mariadb-server.cnf /etc/mysql/mariadb.conf.d/

RUN chown -R mysql:mysql /var/lib/mysql \
    && chmod 777 /var/lib/*

CMD bash /start.sh

EXPOSE 3306