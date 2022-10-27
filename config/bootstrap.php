<?php

require_once './config/autoload.php';

$connection = new Database('localhost', 'oopblog', 'root', '');
$pdo = $connection->connect();
Post::$pdo = $pdo;