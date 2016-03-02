FROM centos:centos7

# This image provides an Apache+PHP environment for running PHP
# applications.

MAINTAINER Kei Omizo

EXPOSE 8080

ENV PHP_VERSION=5.6

# Install Apache httpd and PHP
RUN yum install -y centos-release-scl && \
    yum install -y --setopt=tsflags=nodocs httpd24 \
    rh-php56 rh-php56-php rh-php56-php-mysqlnd rh-php56-php-pgsql rh-php56-php-bcmath \
    rh-php56-php-gd rh-php56-php-intl rh-php56-php-ldap rh-php56-php-mbstring rh-php56-php-pdo \
    rh-php56-php-pecl-memcache rh-php56-php-process rh-php56-php-soap rh-php56-php-opcache rh-php56-php-xml \
    more-php56-php-pecl-imagick \
    rh-php56-php-pecl-xdebug && \
    yum clean all -y

# Install freetds
RUN yum install -y epel-release
RUN yum install -y freetds freetds-devel

USER default
