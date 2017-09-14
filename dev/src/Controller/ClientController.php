<?php

namespace Controller;

use Entity\Client;

class ClientController extends ControllerAbstract{
    public function registerAction() {
        $client = new Client();
        $errors = [];
        
        if(!empty($_POST)){
//            $this->sanitizePost();
            
            $client->setFirstname($_POST['firstname'])
                   ->setLastname($_POST['lastname'])
                   ->setEmail($_POST['email'])
                   ->setStartDateContract($_POST['start_date_contract'])
                   ->setPhoneNumber($_POST['phone_number'])
                   ->setBillingAddress($_POST['billing_address'])
                   ->setPostalCode($_POST['postal_code'])
                   ->setCity($_POST['city'])
                   ->setCountry($_POST['country'])
                   ->setIsActive($_POST['is_active'])
                   ->setCompany($_POST['company'])
                   ->setSiret($_POST['siret'])
                   ->setPassword($_POST['password'])
                    ;

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
//            }elseif (!is_null($this->app['client.repository']->findByEmail($_POST['email']))) {
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
                $this->app['client.repository']->save($client);
                
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
