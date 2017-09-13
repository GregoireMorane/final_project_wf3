<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

//définition de la base de donnée
$app->register (
        new Silex\Provider\DoctrineServiceProvider(),
        [
            'db.options' =>[
                        'driver' => 'pdo_mysql',
                        'host' => 'localhost',
                        'dbname' => 'alchimistes', 
                        'user' => 'root',
                        'password' => '',
                        'charset' => 'utf8'
                ]
        ]
        );


// gestionnaire de sessions de Symfony($app['session']
$app->register(new Silex\Provider\SessionServiceProvider());



return $app;
