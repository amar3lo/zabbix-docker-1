# zabbix-docker
Dockerfiles, compose and script to build a full zabbix stack in Docker with Alpine Linux

## Build images

To build a full zabbix full stack, you have ti build all images in this order :

* ***alpine/mariadb***
```
docker build -t alpine/mariadb -f Dockerfile_mariadb .
```

* ***alpine/zabbix-server***
```
docker build -t alpine/zabbix-server -f Dockerfile_zabbix_server .
```

* ***alpine/nginx***
```
docker build -t alpine/nginx -f Dockerfile_nginx .
```

* ***alpine/zabbix_frontend***
```
docker build -t alpine/zabbix-frontend -f Dockerfile_zabbix_frontend .
```


## Start all container

Use the docker-compose file :
```
docker-compose up -d
```

