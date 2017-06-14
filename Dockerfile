FROM ubuntu:14.04

MAINTAINER Serey <serey@ifscore.com>

RUN apt-get update -y
RUN apt-get install -y git curl apache2 php5 libapache2-mod-php5 php5-mcrypt php5-mysql

# Put all of our source code to the container's default
# apache folder
RUN rm -rf /var/www/html/*
COPY src /var/www/html


# Set up Apache environment
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# Exposes apache port 80, but we would map it 
# to the Host IP as well
EXPOSE 80

# Run apache in the foreground
CMD ["/usr/sbin/apache2", "-D",  "FOREGROUND"]