auteur : Diane mansuy
projet : Docker - IPSSI Decembre 2017 - Projet Not�
intervenant : Cyrille Grandval
date limite : 22 d�cembre 2017 � 17h

Projet sous Linux r�alis� dans MobaXterm
-> � d�sarchiver dans /home/yourName

le serveur mysql � �t� installer dans sa derni�re version (5.5)

commande pour lanc� le DockerFile dans root : docker build . -t tp-image

contenue du DockerFile :

FROM centos:latest
RUN yum -y install php-fpm
RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
RUN rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
RUN yum -y install php-gd
RUN yum -y install php-pdo
RUN yum -y install php-mysql
RUN yum install -y epel-release
RUN yum install -y  nginx
RUN yum install -y mysql




