<?php
use Silex\Application;
use Silex\Provider\SwiftmailerServiceProvider;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
$app->register(new SwiftmailerServiceProvider());
$app->register(new AssetServiceProvider(), array(
    'assets.named_packages' => array(
      'css' => array('base_path' => '/styles'),
      'js' => array('base_path' => '/scripts'),
      'node' => array('base_path' => '/node_modules'),
    )
));
$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../templates',
));

$app['debug'] = true;

$app['swiftmailer.options'] = array(
    'host' => 'smtp.mailgun.org',
    'port' => '587',
    'username' => 'postmaster@sandbox7432763c3017461983b4cd64f0de9b80.mailgun.org',
    'password' => 'da0a47255fe73f2adf49dc1fee5f85fb',
    'encryption' => 'tls'
);

return $app;
