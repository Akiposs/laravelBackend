CREATE DATABASE schedule_manage_db;
CREATE USER 'schedule_mng_user'@'phpfpm' IDENTIFIED BY 'shcedule_mtg_pass';
GRANT ALL ON shcedule_manage_db.* TO 'schedule_mng_user'@'phpfpm';


-- CREATE USER 'test'@'phpfpm' IDENTIFIED BY 'test';
-- GRANT ALL ON *.* TO 'schedule_mng_user4'@'172.30.0.3';