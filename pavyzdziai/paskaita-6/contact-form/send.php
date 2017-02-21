<?php
$message = '';
if (array_key_exists("firstname", $_POST)) {
  // Isitraukiam biblioteka naudojimui
  if ($_POST["firstname"] !== "" || $_POST["lastname"] !== "" || $_POST["email"] !== "") {
    require 'vendor/autoload.php';
    // Susikuriam objekta is phpmailer klases
    $mail = new PHPMailer;

    // // Nustatom siuntimo konfiguracija
    $mail->isSMTP();
    $mail->Host = 'smtp.mailgun.org';
    $mail->SMTPAuth = true;
    $mail->Username = 'postmaster@sandbox7432763c3017461983b4cd64f0de9b80.mailgun.org';
    $mail->Password = 'da0a47255fe73f2adf49dc1fee5f85fb';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $fullname = $_POST["firstname"] . ' ' . $_POST["lastname"];
    // Paruosiam laisko headeri
    $mail->setFrom('laurynas.ant@gmail.com', 'Laurynas');
    $mail->addAddress('laurynas.ant@gmail.com', 'Laurynas Admin');
    $mail->addReplyTo($_POST["email"], $fullname);

    // Pasiruosiam laisko turini
    $mail->isHTML(true);

    $mail->Subject = 'Contact form submission';
    $mail->Body = 'Firstname: ' . $_POST["firstname"] . '<br>Lastname: ' . $_POST["lastname"] . '<br>Email: '.$_POST["email"];

    if (!$mail->send()) {
      $message = 'Failed to send'.$mail->ErrorInfo;
    } else {
      $message = 'Thank you for your registration';
    }
  } else {
    $message = 'Please, fill in required fields';
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thank You</title>
  </head>
  <body>
    <h1>Thank you</h1>
    <?php
      if ($message) {
        echo '<div><p class="alert alert-danger">' . $message .'</p></div>';
      }
    ?>
  </body>
</html>
