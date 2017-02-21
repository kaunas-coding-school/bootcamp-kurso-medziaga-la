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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>System of Motion</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
  </head>
  <body>
    <div class="container-fluid bg-image">
      <div class="row full-height">
        <div class="col-xs-12">
          <a class="logo" href="/"></a>
          <div class="row bg-white">
            <div class="col-sm-9 col-md-8 col-lg-6">
              <h1 class="mobile-center">A new world of tailored shirts for women</h1>
              <h2  class="mobile-center">Arriving 2016</h2>
              <p class="mobile-center">Sign up for reinvented wardrobe classics, made for movement</p>
              <?php
                if ($message) {
                  echo '<div><p class="alert alert-danger">' . $message .'</p></div>';
                }
              ?>
              <form id="js-contact" class="contact-form form-horizontal" method="POST" novalidate>
                <div class="form-group">
                  <div class="col-sm-6">
                    <input id="js-firstname" class="form-control" type="text" name="firstname" placeholder="First name">
                  </div>
                  <div class="col-sm-6">
                    <input class="form-control" type="text" name="lastname"  placeholder="Last name">
                  </div>
                </div>
                <div>
                  <input class="form-control" type="email" name="email"  placeholder="Your email address">
                </div>
                <div class="form-group">
                  <div class="col-sm-7 col-md-6 col-lg-5">
                    <input class="btn btn-default btn-block btn-lg contact-button" type="submit" value="Sign up">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
    <script src="scripts/main.js" charset="utf-8"></script>
  </body>
</html>
