<p align="center">
<a href="https://laravel.com" target="_blank">
<img src="/laravel/public/logo.svg" width="400">
</a></p>

<p align="center">
<a>Laravel 9.1.2</a>
<a>Docker 20.10.13</a> |
<a>NGINX 1.2.6</a> |
<a>PHP 8.1.4</a> |
<a>MYSQL 8.0.28</a>
</p>
<p align="center">
<a>PHPMyAdmin 5.1.3</a>
<a>Node 1.4.2</a> |
<a>NPM 8.5.0</a> |
<a>Yarn 1.22.18</a> |
<a>Git 2.30.2</a> |
<a>Composer 2.2.9</a>
</p>

___
# Steps to deploy the project

## Install Docker
> https://docs.docker.com/engine/install/

## Config Laravel
Copy the .env.example file in the Laravel folder and rename it to .env
>DB_CONNECTION=mysql             
DB_HOST=MYSQL          
DB_PORT=3306              
DB_DATABASE=attendance_main           
DB_USERNAME=root      
DB_PASSWORD=root      

## Run command lines
> At the project root directory where the docker-compose.yml file is located, run the commands

`docker compose up -d`

`docker exec -it PHP bash`

`sudo install -C -m 777 .env.example .env`

`composer install`

`yarn install`

`php artisan key:generate`

`php artisan migrate:fresh --seed`

`yarn dev`

`touch storage/logs/laravel.log`

`chmod -R 777 storage/`

## Docker Ubuntu
> Got permission denied while trying to connect to the Docker daemon socket at unix:///var/run/docker.sock: Get "http://%2Fvar%2Frun%2Fdocker.sock/v1.24/containers/PHP/json": dial unix /var/run/docker.sock: connect: permission denied

`sudo chmod 666 /var/run/docker.sock`
