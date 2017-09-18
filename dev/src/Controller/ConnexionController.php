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
                        $this->app['user.manager']->loginClient($client);
                        return $this->redirectRoute('compteclient');
                    }
                }
            }
            elseif($_POST['radios'] == 'salarié'){
                $email = $_POST['email'];
                $collector = $this->app['connexion.repository']->findByEmailCollectorAdmin($email);
                
                if(!is_null($collector)){
                    if($this->app['user.manager']->verifyPassword($_POST['password'], $collector->getPassword())){
                        $this->app['user.manager']->loginCollector($collector);

                    }
                }
            }
            elseif($_POST['radios'] == 'admin'){
                $email = $_POST['email'];
                $collector = $this->app['connexion.repository']->findByEmailCollectorAdmin($email);
                
                if(!is_null($collector)){
                    if($this->app['user.manager']->verifyPassword($_POST['password'], $collector->getPassword())){
                        $this->app['user.manager']->loginAdmin($collector);
                        return $this->redirectRoute('compteadmin');
                    }
                }
            }
            $this->addFlashMessage('Identification incorrecte', 'error');
        }
                        return $this->redirectRoute('comptecollecteur');
    }
