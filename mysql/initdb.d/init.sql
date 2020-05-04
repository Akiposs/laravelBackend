CREATE DATABASE laravel_backend_db;
CREATE USER 'laravel_backend_user'@'%' IDENTIFIED BY 'tmp1234';
GRANT ALL PRIVILEGES ON laravel_backend_db.* TO 'laravel_backend_user'@'%';