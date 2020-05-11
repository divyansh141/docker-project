# Docker Project
# INTRODUCTION
I have completed my Docker Training under IIEC RISE 1.0 by Vimal Daga Sir. I have created a docker-compose.yml file and after running this file you can access my WebPages in 1-2 seconds depending on your system specs.
# My Setup
- Virtualisation tool- I have used Oracle VirtualBox 6.0
- Linux- I have used RHEL8 (REDHAT ENTERPRISE LINUX VERSION 8)

In RHEL8 i used following:
- Docker community version : 19.03.8
- Centos:7
- MySql version: 5.7.29
# Steps to Follow
1) Pull your docker images-
Start docker services by systemctl start docker command. I have pulled images of mysql: 5.7.29 , centos:7 and php:latest for my project.

2) Start HTTPD service-
Start the database server and web server. For web server, we configure Apache httpd server. Start httpd services and stop firewalld.

3) Run docker-compose.yml file-
Install docker compose and then place the compose file in the default root directory and check by ls command if the file is there or not. Then to run the file do – docker-compose up –d Then check by docker ps command that the web container and db container are running.

# Version:
There are several versions of Compose file format. We have to specify the version we are using as all the keywords are not supported by every versions. Here we are using the latest version '3'.

# services:
It list outs all the services we are running in the infrastructure.

# container_name:
Gives the container any name we want.

# volumes:
Mounts the host paths or named volumes to the services, so the data inside container becomes persistent.

# ports:
Exposes the server port through a free host port, HOST:CONTAINER.

# depends_on:
Express dependencies between services eg. here web service depends on dbos service.

# environment:
Here we specify environment variables.

4) Placing the web pages in the web volume storage-
Place the web pages ( that I’ve uploaded in Website Directory ) in the volume that is created for webos by docker compose file.

5) Accessing the web pages-
Check your redhat’s IP by ifconfig command. Access the first page- States.html by your Redhat’s IP: Port no 4321

Ex- 192.168.43.180:4321
SCOPE OF IMPROVEMENT:
This project is currently working on Local Netwotk and i will try to host it publically. For that i can use Ngrok for free public IP and  GoDaddy is also a option for paid services.
# ACKNOWLEDGEMENT
I would like to thank Vimal Daga Sir for teaching us this amazing technology and improved my confidence in industrial knowledge.
