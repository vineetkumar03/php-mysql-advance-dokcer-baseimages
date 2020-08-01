FROM  mariadb:latest
LABEL maintainer="vineet kumar"
COPY *.sh /docker-entrypoint-initdb.d/
COPY *.sql /docker-entrypoint-initdb.d/
#Environment variable may store in .env file
#IF u want that add mysql image with latest datagase, add below COPY command and run "docker-compose up --build" command
#COPY ./mysql /var/lib/mysql 
