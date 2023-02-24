# TemplateDocker
使用 docker-compose 集合了 php, Nginx, mysql, redis, phpmyadmin 等，
常用開發環境範本。

`記得要改 docker-compose.yaml 內對應的 port 及 container_name`

## 使用到的 IMAGE 版本說明與連結
>> [php:8.2.2-fpm-alpine](https://hub.docker.com/layers/library/php/8.2.2-fpm-alpine/images/sha256-94022b1d36943e4225f00ea6676e0e07accbdaa1190a3d78fac9d18474cf0c8e?context=explore)
>>> php 裡面 extensions 安裝使用了
>>> [docker-php-extension-installer](https://github.com/mlocati/docker-php-extension-installer)
> 
>> [nginx:1.22.1-alpine-perl](https://registry.hub.docker.com/layers/library/nginx/1.22.1-alpine-perl/images/sha256-75afe29dda426c0eb659a62503dbb746fdd115f8f2f2e54fe37a546722a96d21?context=explore)
>
>> [mysql:8.0](https://registry.hub.docker.com/layers/library/mysql/8.0/images/sha256-61c1efe1cff61a37c399d556feb489fcb81caedd871e65c018bcbdce8fe208b2?context=explore)
> 
>> [redis](https://registry.hub.docker.com/_/redis)
> 
>> [phpMyAdmin](https://registry.hub.docker.com/r/phpmyadmin/phpmyadmin)

## 使用方法
```
$ docker-compose up -d
```