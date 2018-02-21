How To Install Linux, Apache, MySQL, PHP (LAMP) stack on Ubuntu 16.04 


Open the link for more information: https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04

HOW TO ADD SCRIPS ON DOCKER
docker run -dti -p 80:80 --name php -v "$PWD":/var/www/html php:7.0-apache
docker build -t anyname/php:interns-1.0.0 .
Dockerfil
FROM php:7.0-apache
RUN apt update
RUN apt install -y vim
COPY scripts/info.php /var/www/html/
COPY scripts/countlog.txt /var/www/html/
COPY scripts/counter.php /var/www/html/


For more information visit this link: https://github.com/masporo/visit-counter.g$
 



