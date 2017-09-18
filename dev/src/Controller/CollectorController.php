<?php

namespace Controller;

use Entity\Collector;

class CollectorController extends ControllerAbstract{
    
    public function indexAction()
    {
        
    }
    
     public function listAction() 
    {
        $collector = $this->app['collector.repository']->findAll();
        return $this->render('formulaireCollector.html.twig',
            [
               'collectors' => $collectors
            ]
            );
    }
    
    public function registerAction() {
        $collector = new Collector();
        $errors = [];
        
      
        
        if(!empty($_POST)){
            $this->sanitizePost();
            $collector
                      ->setLastname($_POST['lastname'])
                      ->setFirstname($_POST['firstname'])
                      ->setPhone_number($_POST['phone_number']) 
                      ->setEmail($_POST['email'])
                      ->setStatus($_POST['status'])
                      ->setAddress($_POST['address'])
                      ->setCity($_POST['city'])
                      ->setPostal_code($_POST['postal_code'])
                      ->setPassword($_POST['password']);

            if(empty($_POST['lastname'])){
                $errors['lastname'] = "Le nom est obligatoire";
            }
            
            if(empty($_POST['firstname'])){
                $errors['firstname'] = "Le prénom est obligatoire";
            }
            
            if(empty($_POST['address'])){
                $errors['address'] = "Le prénom est obligatoire";
            }
            
            if(empty($_POST['city'])){
                $errors['city'] = "La ville est obligatoire";
            }
            
            if(empty($_POST['postal_code'])){
                $errors['postal_code'] = "Le code postal est obligatoire";
            }

            if(empty($_POST['email'])){
                $errors['email'] = "L'email est obligatoire";
            }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "L'email n'est pas valide";
            }
            
            if(empty($_POST['phone_number'])){
                $errors['phone_number'] = "Le numéro de téléphone est obligatoire";
            }
            
            if(empty($_POST['password'])){
                $errors['password'] = "Le mot de passe est obligatoire";
            }elseif(!preg_match("/^[a-zA-Z0-9_-]{6,20}$/", $_POST['password'])){
                $errors['password'] = "Le mot de passe doit faire entre 6 et 20 caractères et ne doit contenir que des lettres, des chiffres ou des caractères _ et -";
            }
            if(empty($_POST['password_confirm'])){
                $errors['password_confirm'] = "La confirmation du mot de passe est obligatoire";
            }elseif($_POST['password'] != $_POST['password_confirm']){
                $errors['password_confirm'] = "La confirmation du mot de passe n'est pas identique au mot de passe.";
            }
            
            if(empty($errors)){
                $collector->setPassword($this->app['user.manager']->encodePassword($_POST['password']));
                $this->app['collector.repository']->save($collector);
                $message = '<strong>L\'utilisateur à bien été enregistré</strong>';
                $this->addFlashMessage($message, 'success');
                return $this->redirectRoute('connexion');
            }else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render(
            'admin/formulaireCollector.html.twig',
            [
                'collector' => $collector
            ]
        );
    }
    
    public function loginAction() {
        
        $email = "";
        
        if(!empty($_POST['email'])){
            $this->sanitizePost();

            $email = $_POST['email'];
            $collector = $this->app['collector.repository']->findByEmail($email);

            if(!is_null($collector)){
                if ($this->app['collector.manager']->verifyPassword($_POST['password'], $collector->getPassword())){
                    $this->app['collector.manager']->login($collector);
                    
                    return $this->redirectRoute('homepage');
                }
            }
            
            $this->addFlashMessage('identification incorrecte', 'error');
        }
        
        return $this->render(
                'collector/login.html.twig',
                [
                    'email' => $email
                ]
        );
    }
    
    public function logoutAction() {
        $this->app['collector.manager']->logout();
        return $this->redirectRoute('homepage');
    }
    
    
}
