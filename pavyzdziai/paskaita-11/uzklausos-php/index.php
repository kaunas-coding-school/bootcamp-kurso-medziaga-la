<?php

$host = '127.0.0.1';
$db = 'pdotest';
$user = 'root';
$pass = 'root';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$users = $pdo->query('SELECT * FROM users');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php uzklausos</title>
  </head>
  <body>
    <h1>Hello world</h1>
    <?php var_dump($pdo) ?>
  </body>
</html>
