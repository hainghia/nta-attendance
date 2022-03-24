# Docker Command Line
docker compose down
docker rmi $(docker images -a -q)
docker volume prune -f
docker compose up -d
clear

# Docker Ubuntu
> Got permission denied while trying to connect to the Docker daemon socket at unix:///var/run/docker.sock: Get "http://%2Fvar%2Frun%2Fdocker.sock/v1.24/containers/PHP/json": dial unix /var/run/docker.sock: connect: permission denied

`sudo chmod 666 /var/run/docker.sock`

# Laravel
composer install
chmod -R 755 storage/
yarn install

