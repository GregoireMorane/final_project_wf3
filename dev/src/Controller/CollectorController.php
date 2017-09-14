<?php

namespace Controller;

use Entity\Collector;

class CollectorController extends ControllerAbstract{
    public function registerAction() {
        $collector = new Collector();
        $errors = [];
        
        $collector->setLastname($_POST['lastname']);
        $collector->setFirstname($_POST['firstname']); 
        $collector->setPhone_number($_POST['phone_number']); 
        $collector->setEmail($_POST['email']);
        $collector->setStatus($_POST['status']);
        $collector->setAddress($_POST['address']);
        $collector->setCity($_POST['city']);
        $collector->setPostal_code($_POST['postal_code']);
        $collector->setPassword($_POST['password']);
        
        if(!empty($_POST)){
//            $this->sanitizePost();

              
//            if(empty($_POST['lastname'])){
//                $errors['lastname'] = "Le nom est obligatoire";
//            }elseif(strlen($_POST['lastname'])>100){
//                $errors['lastname'] = "Le nom doit être inférieur à 100 caractères";
//            }
//
//            if(empty($_POST['firstname'])){
//                $errors['firstname'] = "Le prénom est obligatoire";
//            }elseif(strlen($_POST['firstname'])>100){
//                $errors['firstname'] = "Le prénom doit être inférieur à 100 caractères";
//            }
//
//            if(empty($_POST['email'])){
//                $errors['email'] = "L'email est obligatoire";
//            }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//                $errors['email'] = "L'email n'est pas valide";
//            }elseif (!is_null($this->app['collector.repository']->findByEmail($_POST['email']))) {
//                $errors['email'] = "L'email est déjà utilisé";
//            }
//
//            if(empty($_POST['password'])){
//                $errors['password'] = "Le mot de passe est obligatoire";
//            }elseif(!preg_match("/^[a-zA-Z0-9_-]{6,20}$/", $_POST['password'])){
//                $errors['password'] = "Le mot de passe doit faire entre 6 et 20 caractères et ne doit contenir que des lettres, des chiffres ou des caractères _ et -";
//            }
//
//            if(empty($_POST['password_confirm'])){
//                $errors['password_confirm'] = "La confirmation du mot de passe est obligatoire";
//            }elseif($_POST['password'] != $_POST['password_confirm']){
//                $errors['password_confirm'] = "La confirmation du mot de passe n'est pas identique au mot de passe.";
//            }
            
            if(empty($errors)){
                //pas be soin d'encoder le code
                //$collector->setPassword($this->app['collector.manager']->encodePassword($_POST['password']));
                $this->app['collector.repository']->save($collector);
                
                return $this->redirectRoute('homepage');
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
