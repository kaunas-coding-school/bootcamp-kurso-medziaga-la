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
      $message = '{ "error": "Failed to send"}';
    } else {
      $message = '{ "success": "Thank you for your registration" }';
    }
  } else {
    $message = '{ "error": "Very please, fill in required fields"}';
  }
} else {
  $message = '{ "error": "Method not supported"}';
}
echo $message;
?>
