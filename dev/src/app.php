<?php
<<<<<<< .merge_file_a19896
=======

use Controller\ClientController;
use Controller\CollectorController;
use Repository\ClientRepository;
use Repository\CollectorRepository;
>>>>>>> .merge_file_a20076
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
<<<<<<< .merge_file_a19896
=======
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TwigServiceProvider;

>>>>>>> .merge_file_a20076
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
        new DoctrineServiceProvider(),
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
<<<<<<< .merge_file_a19896
$app->register(new Silex\Provider\SessionServiceProvider());
=======
$app->register(new SessionServiceProvider());

$app['client.manager'] = function () use($app) {
    return new Service\ClientManager($app['session']);
};

$app['collector.manager'] = function () use($app) {
    return new Service\CollectorManager($app['session']);
};

>>>>>>> .merge_file_a20076
//Admin inscription d'un collecteur brouillon
$app['collector.controller'] = function () use ($app)
{
    return new CollectorController($app);
};
$app['collector.repository']= function () use ($app){
    return new CollectorRepository($app['db']);
};
$app['client.controller'] = function () use ($app)
{
    return new ClientController($app);
};
$app['client.repository']= function () use ($app){
    return new ClientRepository($app['db']);
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
$app['collecte.controller'] = function () use ($app)
{
    return new Controller\CollecteControler($app);
};
$app['collecte.repository']= function () use ($app){
    return new Repository\CollecteRepository($app['db']);
};
$app['outputcompost.controller'] = function () use ($app)
{
    return new Controller\OutputCompostController($app);
};
$app['outputcompost.repository']= function () use ($app){
    return new Repository\OutputCompostRepository($app['db']);
};

//repositories
//affichage des infos adressescollectes dans formulaire 
$app['adresses_collectes.repository']= function () use ($app){
    return new Repository\AdressesCollectesRepository($app['db']);
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
//commentaire
