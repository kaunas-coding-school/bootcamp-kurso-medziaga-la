<?php

// Connect to database
$host = '127.0.0.1';
$db = 'pdotest';
$user = 'root';
$pass = 'root';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Initiate database object from PDO class
$pdo = new PDO($dsn, $user, $pass);

// Set up query
$query = $pdo->query('SELECT * FROM users');

// Execute query and save results to $users
// $users = $query->fetch();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php uzklausos</title>
  </head>
  <body>
    <h1>Hello world</h1>
    <?php
      while ($user = $query->fetch()) {
        echo $user['id'] . $user['firstname'] . "\n";
      }
    ?>
  </body>
</html>
