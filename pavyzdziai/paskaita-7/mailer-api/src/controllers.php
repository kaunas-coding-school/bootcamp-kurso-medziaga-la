<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/', function() use ($app) {
  return $app['twig']->render('index.html.twig', array());
});

$app->get('/hello/{name}', function($name) use ($app) {
  return $app['twig']->render('hello.html.twig', array('name' => $name));
});

$app->post('/send', function(Request $request) use ($app) {
  $email = $request->get('email');
  $firstname = $request->get('firstname');
  $lastname = $request->get('lastname');

  $msg = new stdClass();

  if ($email || $firstname || $lastname) {
    $message = \Swift_Message::newInstance()
      ->setSubject('Registration form')
      ->setFrom(array('laurynas.ant@gmail.com'))
      ->setTo(array('laurynas.ant@gmail.com'))
      ->setBody($app['twig']->render('registration.html.twig', array('email' => $email, 'firstname' => $firstname, 'lastname' => $lastname)), 'text/html');

    if($app['mailer']->send($message)) {
      $msg->success = "Thank you for registration";
    } else {
      $msg->error = "Could not send message";
    }

  } else {
    $msg->error = "Please, enter all fields";
  }
  return $app->json($msg, 200);
});
