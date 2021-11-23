<?php

$host = 'database';
$user = 'myuser';
$pass = 'secret';
$db_name = 'mydb';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
