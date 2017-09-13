<?php
namespace Controller;

use Entity\Collector;

class CollectorController extends ControllerAbstract{
    public function registerAction() {
        $collector = new Collector();
        $errors = [];
        
        if(!empty($_POST)){
            $this->sanitizePost();
                
            $collector
                ->setLastname($_POST['lastname'])
                ->setFirstname($_POST['firstname'])
                ->setPhonenumber($_POST['phone_number'])
                ->setEmail($_POST['email'])
                ->setStatus($_POST['status'])
                ->setAddress($_POST['address'])
                ->setCity($_POST['city'])
                ->setPostalcode($_POST['postal_code']);
            
            if(empty($_POST['lastname'])){
                $errors['lastname'] = "Le nom est obligatoire";
            } elseif(strlen($_POST['lastname'])>45){
                $errors['lastname'] = "Le nom doit être inférieur à 45 caractères";
            }

            if(empty($_POST['firstname'])){
                $errors['firstname'] = "Le prénom est obligatoire";
            } elseif(strlen($_POST['firstname'])>45){
                $errors['firstname'] = "Le prénom doit être inférieur à 45 caractères";
            }
            
            if(empty($_POST['phone_number'])){
                $errors['phone_number'] = "Le numéro de téléphone est obligatoire";
            } elseif(strlen($_POST['phone_number'])>45){
                $errors['phone_number'] = "Le numéro de téléphone doit être inférieur à 45 caractères";
            }

            if(empty($_POST['email'])){
                $errors['email'] = "L'email est obligatoire";
            } elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "L'email n'est pas valide";
            } elseif (!is_null($this->app['collector.repository']->findByEmail($_POST['email']))) {
                $errors['email'] = "L'email est déjà utilisé";
            }
            
            if(empty($_POST['status'])){
                $errors['status'] = "Le statut (salarié/admin) est obligatoire";
            } elseif(strlen($_POST['status'])>45){
                $errors['status'] = "Le numéro de téléphone doit être inférieur à 45 caractères";
            }

            if(empty($_POST['address'])){
                $errors['address'] = "L'adresse est obligatoire";
            } elseif(strlen($_POST['address'])>45){
                $errors['address'] = "L'adresse doit être inférieure à 45 caractères";
            }
            
            if(empty($_POST['city'])){
                $errors['city'] = "La ville est obligatoire";
            } elseif(strlen($_POST['city'])>45){
                $errors['address'] = "Le nom de la ville doit être inférieure à 45 caractères";
            }
            
            if(empty($_POST['postal_code'])){
                $errors['city'] = "Le code postal est obligatoire";
            } elseif(strlen($_POST['postal_code']) > 45){
                $errors['address'] = "Le code postal doit avoir 5 chiffres";
            }               

            if(empty($_POST['password'])){
                $errors['password'] = "Le mot de passe est obligatoire";
            } elseif(!preg_match("/^[a-zA-Z0-9_-]{6,20}$/", $_POST['password'])){
                $errors['password'] = "Le mot de passe doit faire entre 6 et 20 caractères et ne doit contenir que des lettres, des chiffres ou des caractères _ et -";
            }

            if(empty($_POST['password_confirm'])){
                $errors['password_confirm'] = "La confirmation du mot de passe est obligatoire";
            } elseif($_POST['password'] != $_POST['password_confirm']){
                $errors['password_confirm'] = "La confirmation du mot de passe n'est pas identique au mot de passe.";
            }
            
            if(empty($errors)){
                $collector->setPassword($this->app['collector.manager']->encodePassword($_POST['password']));
                $this->app['collector.repository']->save($collector);
                
                return $this->redirectRoute('homepage');
            } else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render(
            'collector/register.html.twig',
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
