CREATE DATABASE IF NOT EXISTS mabase;
USE mabase;
CREATE TABLE IF NOT EXISTS matable (compteur INTEGER);
USE mysql;
GRANT ALL PRIVILEGES ON *.* TO 'php_user'@'%' IDENTIFIED BY 'sdrugntqqsciur';
FLUSH PRIVILEGES;
-- INSERT INTO matable (compteur) SELECT count(*)+1 FROM matable;