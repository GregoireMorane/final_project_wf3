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

//d�finition de la base de donn�e
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

//Admin inscription d'un collecteur brouillon
$app['collector.controller'] = function () use ($app)
{
    return new Controller\CollectorController($app);
};

$app['collector.repository']= function () use ($app){
    return new Repository\CollectorRepository($app['db']);
};

$app['client.controller'] = function () use ($app)
{
    return new Controller\ClientController($app);
};

$app['client.repository']= function () use ($app){
    return new Repository\ClientRepository($app['db']);
};

$app['lieutraitement.controller'] = function () use ($app)
{
    return new Controller\LieuTraitementController($app);
};

$app['lieutraitement.repository']= function () use ($app){
    return new Repository\LieuTraitementRepository($app['db']);
};

$app['lieucollecte.controller'] = function () use ($app)
{
    return new Controller\LieuCollecteController($app);
};

$app['lieucollecte.repository']= function () use ($app){
    return new Repository\LieuCollecteRepository($app['db']);
};

$app['traitementcollector.controller'] = function () use ($app)
{
    return new Controller\TraitementCollectorController($app);
};

$app['traitementcollector.repository']= function () use ($app){
    return new Repository\TraitementCollectorRepository($app['db']);
};

return $app;
//commentaire