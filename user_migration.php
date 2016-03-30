<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'codeup_test_db');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');
require_once __DIR__ . '/db_connect.php';
$createTableQuery = 'CREATE TABLE IF NOT EXISTS user(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(150) NOT NULL,
    password VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    PRIMARY KEY (id))';
$dbc->exec('DROP TABLE IF EXISTS user');
$dbc->exec($createTableQuery);