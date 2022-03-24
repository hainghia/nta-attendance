# Server Root

-   IP: 100.100.100.100
-   Port: 7777 | 22
-   Username: root
-   Password: PassWord@123

# Info User

-   IP: 100.100.100.100
-   Username: root
-   Password: PassWord@123
-   UserMysql: root_database
-   PassMysql: Passdata
-   DataName: attendance_main

# Command Line

-   Connect host: ssh root@100.100.100.100 -p 7777
-   Show curent Path: pwd
-   Directory: cd /home/root/domains/domain.com/public_html

# Database Import

-   scp -P7777 attendance_main.sql root@100.100.100.100:/home/root/domains/domain.com/public_html ------(Sao chép tập tin local -> remote. (Terminal khi chưa đăng nhập)
-   scp -P7777 root@100.100.100.100:/root/attendance_main.sql . ------(Sao chép tập tin remote -> local hiện tại(Terminal khi chưa đăng nhập)

-   Export: mysqldump --no-tablespaces -u root -p attendance_main > attendance_main.sql
-   Import: mysql -u root -p attendance_main < attendance_main.sql

# Database Query

-   Content Database: mysql -u username -p
-   Show all: show databases;
-   Select data: use databasename;
-   SHOW TABLES;
-   SHOW FULL TABLES;
-   SHOW TABLES FROM database_name;
-   Query: select `*` from `wp_users`;

# Docker Command Line
docker compose down
docker rmi $(docker images -a -q)
docker volume prune -f
docker compose up -d
clear


# Laravel
composer install
chmod -R 755 storage/
sudo chmod -R 775 storage/
sudo chmod -R ugo+rw storage/
