<?php
use Silex\Application;

$app = new Application();
$app->register(new Silex\Provider\SwiftmailerServiceProvider());

$app['debug'] = true;

$app['swiftmailer.options'] = array(
    'host' => 'smtp.mailgun.org',
    'port' => '587',
    'username' => 'postmaster@sandbox7432763c3017461983b4cd64f0de9b80.mailgun.org',
    'password' => 'da0a47255fe73f2adf49dc1fee5f85fb',
    'encryption' => 'tls'
);

return $app;
