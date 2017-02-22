<?php

$app->get('/', function() use ($app) {
  return $app['twig']->render('index.html.twig', array());
});

$app->get('/hello/{name}', function($name) use ($app) {
  return $app['twig']->render('hello.html.twig', array('name' => $name));
});

$app->post('/send', function() {
  return '<h1>Hello World</h1>';
});
