# Docker Project
# INTRODUCTION
I have completed my Docker Training under IIEC RISE 1.0 by Vimal Daga Sir. I have created a docker-compose.yml file and after running this file you can access my WebPages in 1-2 seconds depending on your system specs.
# My Setup
- I have used Oracle VirtualBox 6.0
- I have used RHEL8 (REDHAT ENTERPRISE LINUX VERSION 8) in Oracle VirtualBox

In RHEL8 i used following:
- Docker community version : 19.03.8
- Centos:7
- MySql version: 5.7.29
# Steps to Follow
1) Pull your docker images-
Use systemctl start docker command to start docker. I have pulled mysql: 5.7.29 , centos:7 and php:latest images.

2) Start HTTPD service-
Start the database server and web server. Start httpd services and stop firewalld.

3) Run docker-compose.yml file-
To use docker-compose.yml file, install docker compose in your system and put this docker-compose.yml file in your root directory and run docker-compose up -d command to run this file

# Version:
I have to specify the version we are using because all the keywords are not supported by every versions. Here I am using the latest version '3'.

# services:
It list outs all the services we are running in the infrastructure.

# container_name:
Give any name to your container.

# volumes:
Mounts the volumes that you have created in redhat to the services, to become your data persistent.

# ports:
Give any unique port number.

# depends_on:
Specify the dependencies between services eg. here web service depends on dbos service.

# environment:
I have specified environment variables in it.

4) Placing the web pages in the web volume storage-
To see webpages in your browser, put all the web pages that I’ve uploaded in Website Directory, in the volume that is created for webos by docker-compose.yml file.

5) Accessing the web pages-
To see weoking webpages, check your base's (redhat) IP by ifconfig enp0s3 command. Access the first page- States.html by your Base’s IP and Port no. 4321

For Ex- 192.168.43.180:4321/States.html

SCOPE OF IMPROVEMENT:
This project is currently working on Local Netwotk and i will try to host it publically. For that i can use Ngrok for free public IP and  GoDaddy is also a option for paid services.
# ACKNOWLEDGEMENT
I would like to thank Vimal Daga Sir for teaching us this amazing technology and improved my confidence in industrial knowledge.
