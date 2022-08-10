FROM mysql:5.7

ENV MYSQL_DATABASE=database \
    MYSQL_USER=docker \
    MYSQL_PASSWORD=docker \
    MYSQL_ROOT_PASSWORD=root \
    TZ=Asia/Tokyo

COPY ./my.cnf /etc/mysql/conf.d/my.cnf

RUN mkdir -p /var/lib/mysql-files && \
    chmod 644 /etc/mysql/conf.d/my.cnf && \
    chmod 644 /var/lib/mysql-files
