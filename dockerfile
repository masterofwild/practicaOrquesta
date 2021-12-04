FROM mysql:5.7


ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=empresa

COPY ./db/ /docker-entrypoint-initdb.d/

