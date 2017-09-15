<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
->bind('homepage')
;

$app->get('/connexion', function () use ($app) {
    return $app['twig']->render('connexion.html.twig', array());
})
->bind('connexion')
;

$app->get('/fichecollecteur', function () use ($app) {
    return $app['twig']->render('admin/formulaireCollector.html.twig', array());
})
->bind('fichecollecteur')
;
/*
$app->get('/formulairedecollecte', function () use ($app) {
    return $app['twig']->render('collector/formulairedecollecte.html.twig', array());
})
->bind('formulairedecollecte')
;
*/
//$app->get('/ficheclient', function () use ($app) {
//    return $app['twig']->render('admin/formulaireClient.html.twig', array());
//})
//->bind('ficheclient')
//;

//$app->get('/ajoutlieutraitement', function () use ($app) {
//    return $app['twig']->render('admin/formulaireLieuTraitement.html.twig', array());
//})
//->bind('ajoutlieutraitement')
//;


// pas besoin d'appeler cette fonction elle est déjà dans les routes plus bas
//$app->get('/formulairecollecte', function () use ($app) {
//    return $app['twig']->render('collector/formulairedecollecte.html.twig', array());
//})
//->bind('ajoutcollecte')
//;

// sortie de compost remplacer par un match 
//$app->get('/formulairecompostesortie', function () use ($app) {
//    return $app['twig']->render('collector/formulaireOutputCompost.html.twig', array());
//})
//->bind('sortiecompost')
//;

$app
    ->match('/fichecollector','collector.controller:registerAction') 
    ->bind('registercollector')
;

$app
    ->match('/ficheclient','client.controller:registerAction') 
    ->bind('registerclient')
;
//appel fonction enregistrement save registerAction pour le formulaire de collecte
$app
    ->match('/formulairecollecte','collecte.controller:registerAction') 
    ->bind('registercollecte')
;

$app
    ->match('/ajoutlieutraitement','lieutraitement.controller:registerAction') 
    ->bind('registerlieutraitement')
;

$app
    ->match('/ajouttraitementcollecteur','traitementcollector.controller:registerAction') 
    ->bind('registertraitementcollector')
;

$app
    ->match('/ajoutlieucollecte','lieucollecte.controller:registerAction') 
    ->bind('registerlieucollecte')
;

$app
    ->match('/formulairecollecte','collecte.controller:registerAction') 
    ->bind('registercollecte')
;

$app
    ->match('/formulairecompostesortie','outputcompost.controller:registerAction') 
    ->bind('registeroutputcompost')
;

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
