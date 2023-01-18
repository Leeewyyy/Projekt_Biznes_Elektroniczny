/* Create user */
CREATE USER IF NOT EXISTS 'kuzynihagrida'@'%' IDENTIFIED BY 'kuzynihagrida';

/* Delete and create new database */
DROP DATABASE IF EXISTS `kuzynihagrida`;
CREATE DATABASE `kuzynihagrida`;

/* Refresh permissions */
GRANT ALL PRIVILEGES ON `kuzynihagrida`.* TO 'kuzynihagrida'@'%';
FLUSH PRIVILEGES;