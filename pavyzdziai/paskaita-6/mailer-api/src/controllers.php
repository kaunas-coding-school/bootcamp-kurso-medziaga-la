<?php

$app->get('/', function() {
  return '<h1>Homepage</h1>';
});

$app->post('/send', function() {
  return '<h1>Hello World</h1>';
});
