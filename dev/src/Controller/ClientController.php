<?php

namespace Controller;

use Entity\User;

class ClientController extends ControllerAbstract{
    public function registerAction() {
        $client = new Client();
        $errors = [];
        
        if(!empty($_POST)){
            $this->sanitizePost();
                
            $client
                ->setLastname($_POST['lastname'])
                ->setFirstname($_POST['firstname'])
                ->setEmail($_POST['email']);

            if(empty($_POST['lastname'])){
                $errors['lastname'] = "Le nom est obligatoire";
            }elseif(strlen($_POST['lastname'])>100){
                $errors['lastname'] = "Le nom doit être inférieur à 100 caractères";
            }

            if(empty($_POST['firstname'])){
                $errors['firstname'] = "Le prénom est obligatoire";
            }elseif(strlen($_POST['firstname'])>100){
                $errors['firstname'] = "Le prénom doit être inférieur à 100 caractères";
            }

            if(empty($_POST['email'])){
                $errors['email'] = "L'email est obligatoire";
            }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "L'email n'est pas valide";
            }elseif (!is_null($this->app['client.repository']->findByEmail($_POST['email']))) {
                $errors['email'] = "L'email est déjà utilisé";
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
                $client->setPassword($this->app['client.manager']->encodePassword($_POST['password']));
                $this->app['client.repository']->save($client);
                
                return $this->redirectRoute('homepage');
            }else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render(
            'client/register.html.twig',
            [
                'client' => $client
            ]
        );
    }
    
    public function loginAction() {
        
        $email = "";
        
        if(!empty($_POST['email'])){
            $this->sanitizePost();

            $email = $_POST['email'];
            $client = $this->app['client.repository']->findByEmail($email);

            if(!is_null($client)){
                if ($this->app['client.manager']->verifyPassword($_POST['password'], $client->getPassword())){
                    $this->app['client.manager']->login($client);
                    
                    return $this->redirectRoute('homepage');
                }
            }
            
            $this->addFlashMessage('identification incorrecte', 'error');
        }
        
        return $this->render(
                'client/login.html.twig',
                [
                    'email' => $email
                ]
        );
    }
    
    public function logoutAction() {
        $this->app['client.manager']->logout();
        return $this->redirectRoute('homepage');
    }
}
