# WebSite

## 使用docker搭建LNMP环境

1. 拉取镜像
    
    docker pull nginx
    
    docker pull mysql
    
    docker pull php:7.4-fpm

2. 安装docker-compose

    curl -L https://github.com/docker/compose/releases/download/1.29.2/docker-compose-Linux-x86_64 -o /usr/local/bin/docker-compose

    chmod +x /usr/local/bin/docker-compose

3. 启动容器

    docker-compose up -d

---
## Reference

[Argon](https://github.com/solstice23/argon-theme)

