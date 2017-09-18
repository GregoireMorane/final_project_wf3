<?php

namespace Controller;

use Entity\Client;
use Entity\Collector;

/**
 * Description of ConnexionController
 *
 * @author ghmor
 */
class ConnexionController extends ControllerAbstract{
    public function loginAction(){
        $client = new Client();
        $collector = new Collector();
        $email = '';
        $errors = [];
        
        if(!empty($_POST))
        {
            if($_POST['radios'] == 'client'){

                $email = $_POST['email'];
                $client = $this->app['connexion.repository']->findByEmailClient($email);
                //dump($client);
                if(!is_null($client)){
                    //dump($this->app['user.manager']->verifyPassword($_POST['password'], $client->getPassword()));dump($_POST);die();
                    if($this->app['user.manager']->verifyPassword($_POST['password'], $client->getPassword())){
                        $this->app['user.manager']->loginUser($client);
                        return $this->redirectRoute('compteclient');
                    }
                }
            }
            elseif($_POST['radios'] == 'salarié'){

                $email = $_POST['email'];
                $collector = $this->app['connexion.repository']->findByEmailCollectorAdmin($email);
                //dump($collector);
                if(!is_null($collector)){
                    //dump($this->app['user.manager']->verifyPassword($_POST['password'], $collector->getPassword()));dump($_POST);die();
                    if($this->app['user.manager']->verifyPassword($_POST['password'], $collector->getPassword())){
                        $this->app['user.manager']->loginUser($collector);
                        return $this->redirectRoute('comptecollecteur');
                    }
                }
            }
            elseif($_POST['radios'] == 'admin'){

                $email = $_POST['email'];
                $collector = $this->app['connexion.repository']->findByEmailCollectorAdmin($email);
                //dump($collector);
                if(!is_null($collector)){
                    //dump($this->app['user.manager']->verifyPassword($_POST['password'], $collector->getPassword()));dump($_POST);die();
                    if($this->app['user.manager']->verifyPassword($_POST['password'], $collector->getPassword())){
                        $this->app['user.manager']->loginUser($collector);
                        return $this->redirectRoute('compteadmin');
                    }
                }
            }
            $this->addFlashMessage('Identification incorrecte', 'error');
        }
        return $this->render('connexion.html.twig');
    }
    
    public function logoutAction(){
        $this->app['user.manager']->logout();
        return $this->redirectRoute('homepage');
    }
}