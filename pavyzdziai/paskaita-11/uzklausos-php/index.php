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

// Execute query and save results to $users
// $users = $query->fetch();

if (array_key_exists('email', $_POST)) {
  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];

  if ($email != '') {
    $query = $pdo->prepare('INSERT INTO users VALUES (NULL, :firstname, :lastname, :email)')->execute([
      ':firstname' => $firstname,
      ':lastname' => $lastname,
      ':email' => $email
    ]);
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php uzklausos</title>
  </head>
  <body>
    <h1>Hello world</h1>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php $query = $pdo->query('SELECT * FROM users'); ?>
        <?php while ($user = $query->fetch()): ?>
        <tr>
          <td><?php echo $user['id'] ?></td>
          <td><?php echo $user['firstname'] ?></td>
          <td><?php echo $user['lastname'] ?></td>
          <td><?php echo $user['email'] ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <br>
    <form method="post">
      <label for="firstname">Your name:</label>
      <input id="firstname" type="text" name="firstname">
      <label for="lastname">Your surname:</label>
      <input id="lastname" type="text" name="lastname">
      <label for="email">Your email:</label>
      <input id="email" type="text" name="email">
      <input type="submit" value="Register">
    </form>
  </body>
</html>
