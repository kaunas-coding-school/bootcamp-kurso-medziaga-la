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
    <?php var_dump($_POST) ?>
    <div class="container-fluid bg-image">
      <div class="row full-height">
        <div class="col-xs-12">
          <a class="logo" href="/"></a>
          <div class="row bg-white">
            <div class="col-sm-9 col-md-8 col-lg-6">
              <h1 class="mobile-center">A new world of tailored shirts for women</h1>
              <h2  class="mobile-center">Arriving 2016</h2>
              <p class="mobile-center">Sign up for reinvented wardrobe classics, made for movement</p>
              <form id="js-contact" class="contact-form form-horizontal"  method="POST">
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