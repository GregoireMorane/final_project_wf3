<?php

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Twig_Environment;


class ControllerAbstract {
    /**
     *
     * @var Application
     */
    protected $app;
    
    /**
     *
     * @var Twig_Environment
     */
    protected $twig;
    
    /**
     * 
     * @var Session
     */
    protected $session;
    
    public function __construct(Application $app) {
        $this->app = $app;
        $this->twig = $app['twig'];
        $this->session = $app['session'];
    }
    
    /**
     * 
     * @param string $view : Le nom de la vue
     * @param array $parameters : Le tableau de paramètres à passer à la vue
     * @return string
     */
    public function render($view, array $parameters = []) {
        return $this->twig->render($view, $parameters);
    }
    /**
     * 
     * @param string $routeName
     * @param array $parameters
     * @return Response
     */
    public function redirectRoute($routeName, array $parameters = []) {
        return $this->app->redirect(
            $this->app['url_generator']->generate($routeName, $parameters)
        );
    }
    
    /**
     * 
     * @param string $message
     * @param string $type
     */
    public function addFlashMessage($message, $type = 'success') {
        $this->session->getFlashBag()->add($type, $message);
    }
    
    /**
     * 
     * @param string $value
     */
    protected function sanitizeValue($value) {
        $value = trim(strip_tags($value));
    }
    
    /**
     * Fonction pour empêcher les injection php
     * @param array $array
     */
    protected function sanitizeArray(array &$array) {
        array_walk($array, [$this, 'sanitizeValue']);
    }
    
    protected function sanitizePost() {
        $this->sanitizeArray($_POST);
    }
}
