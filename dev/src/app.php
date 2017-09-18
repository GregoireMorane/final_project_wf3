<?php

use Controller\ClientController;
use Controller\CollectorController;
use Repository\ClientRepository;
use Repository\CollectorRepository;
use Service\UserManager;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;

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
$app->register(
        new DoctrineServiceProvider(), [
    'db.options' => [
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

$app['client.manager'] = function () use($app) {
    return new Service\ClientManager($app['session']);
};
$app['collector.manager'] = function () use($app) {
    return new Service\CollectorManager($app['session']);
};

//Admin inscription d'un collecteur 
$app['collector.controller'] = function () use ($app) {
    return new CollectorController($app);
};
$app['collector.repository'] = function () use ($app) {
    return new CollectorRepository($app['db']);
};
$app['client.controller'] = function () use ($app) {
    return new ClientController($app);
};
$app['client.repository'] = function () use ($app) {
    return new ClientRepository($app['db']);
};
$app['lieutraitement.controller'] = function () use ($app) {
    return new Controller\LieuTraitementController($app);
};
$app['lieutraitement.repository'] = function () use ($app) {
    return new Repository\LieuTraitementRepository($app['db']);
};
$app['lieucollecte.controller'] = function () use ($app) {
    return new Controller\LieuCollecteController($app);
};
$app['lieucollecte.repository'] = function () use ($app) {
    return new Repository\LieuCollecteRepository($app['db']);
};
$app['traitementcollector.controller'] = function () use ($app) {
    return new Controller\TraitementCollectorController($app);
};
$app['traitementcollector.repository'] = function () use ($app) {
    return new Repository\TraitementCollectorRepository($app['db']);
};
$app['collecte.controller'] = function () use ($app) {
    return new Controller\CollecteControler($app);
};
$app['collecte.repository'] = function () use ($app) {
    return new Repository\CollecteRepository($app['db']);
};
$app['outputcompost.controller'] = function () use ($app) {
    return new Controller\OutputCompostController($app);
};
$app['outputcompost.repository'] = function () use ($app) {
    return new Repository\OutputCompostRepository($app['db']);
};


//repositories
//affichage des infos adressescollectes dans formulaire 
$app['adresses_collectes.repository'] = function () use ($app) {
    return new Repository\AdressesCollectesRepository($app['db']);
};
// fonction de connexion de la page connexion
$app['connexion.controller'] = function () use ($app)
{
    return new Controller\ConnexionController($app);
};
$app['connexion.repository']= function () use ($app){
    return new Repository\ConnexionRepository($app['db']);
};
$app['user.manager']= function () use ($app){
    return new UserManager($app['session']);
};
// affichage dans la vue compte admin 18 09
$app['compteadmin.controller']= function () use ($app){
    return new Controller\CompteAdmin($app);
};
//affichage des infos clients dans la vue ajoutlieudecollect
//$app['client.repository']= function () use ($app){
//    return new Repository\ClientRepository($app['db']);
//};
// modification simone et register identique à  revoir
// gestionnaire de sessions de Symfony($app['session']
//$app->register(new SessionServiceProvider());
//
//$app['client.manager'] = function () use($app) {
//    return new Service\ClientManager($app['session']);
//};
//
//$app['collector.manager'] = function () use($app) {
//    return new Service\CollectorManager($app['session']);
//};
//
////Admin inscription d'un collecteur brouillon
//$app['collector.controller'] = function () use ($app)
//{
//    return new CollectorController($app);
//};
//
//$app['collector.repository']= function () use ($app){
//    return new CollectorRepository($app['db']);
//};
//
//$app['client.controller'] = function () use ($app)
//{
//    return new ClientController($app);
//};
//
//$app['client.repository']= function () use ($app){
//    return new ClientRepository($app['db']);
//};
return $app;
