FROM composer:latest

WORKDIR /var/www/TechnoHubEngine

ENTRYPOINT ["composer", "--ignore-platform-reqs"]
