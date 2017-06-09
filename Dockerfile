FROM ubuntu:12.04

# Installs all dependencies
RUN apt-get update -y
RUN apt-get install -y git curl apache2 php5 libapache2-mod-php5 php5-mcrypt php5-mysql

# Put all of our source code to the container's directory
# that we've specified
RUN rm -rf /var/www/*
ADD src /var/www

# Configure apache
RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

# Exposes apache port 80, but we would map it 
# to the Host IP when we run it
EXPOSE 80

# Run apache in the foreground
CMD ["/usr/sbin/apache2", "-D",  "FOREGROUND"]
