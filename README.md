# WebSite

## 使用docker搭建LNMP环境

1. 拉取镜像
    
    docker pull nginx
    
    docker pull mysql
    
    docker pull php:7.4-fpm

2. 安装docker-compose

    Docker-compose介绍详见[Docker-compose](https://github.com/docker/compose/)
    
    运行如下命令以安装docker-compose

    sudo curl -L https://github.com/docker/compose/releases/download/1.29.2/docker-compose-Linux-x86_64 -o /usr/local/bin/docker-compose

    sudo chmod +x /usr/local/bin/docker-compose

3. 启动容器

    docker-compose up -d
    
4. mysql相关设置

    docker exec -it mysql /bin/bash
    
    mysql -uroot -p'rootPassWd'
    
    create user wordpress identified by 'yourPassWd';
    
    create database wordpress;
    
    grant all privileges on wordpress.* to wordpress;
    
    flush privileges;
    
5. WordPress相关设置
    

---
## Reference

[Argon](https://github.com/solstice23/argon-theme)

