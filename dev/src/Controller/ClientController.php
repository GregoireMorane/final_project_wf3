<?php

namespace Controller;

use Entity\Client;

class ClientController extends ControllerAbstract{
    public function registerAction() {
        $client = new Client();
        $errors = [];
        
        if(!empty($_POST)){
            $this->sanitizePost();
                
            $client
                ->setLastname($_POST['lastname'])
                ->setFirstname($_POST['firstname'])
                ->setEmail($_POST['email'])
                ->setStartDateContract($_POST['start_date_contract'])
                ->setPhoneNumber($_POST['phone_number'])
                ->setBillingAddress($_POST['billing_adress'])
                ->setPostalCode($_POST['postal_code'])
                ->setCity($_POST['city'])
                ->setCountry($_POST['country'])
                ->setIsActive($_POST['is_active'])
                ->setCompany($_POST['company'])
                ->setSiret($_POST['siret']);


            if(empty($_POST['lastname'])){
                $errors['lastname'] = "Le nom est obligatoire";
            }elseif(strlen($_POST['lastname'])>45){
                $errors['lastname'] = "Le nom doit Ãªtre infÃ©rieur Ã  45 caractÃ¨res";
            }

            if(empty($_POST['firstname'])){
                $errors['firstname'] = "Le prÃ©nom est obligatoire";
            }elseif(strlen($_POST['firstname'])>45){
                $errors['firstname'] = "Le prÃ©nom doit Ãªtre infÃ©rieur Ã  45 caractÃ¨res";
            }

            if(empty($_POST['phone_number'])){
                $errors['phone_number'] = "Le numéro de téléphone est obligatoire";
            }elseif(!is_integer($_POST['phone_number'])){
                $errors['phone_number'] = "Le numéro de téléphone doit être un nombre";
            }
            
            if(empty($_POST['email'])){
                $errors['email'] = "L'email est obligatoire";
            }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "L'email n'est pas valide";
            }elseif (!is_null($this->app['client.repository']->findByEmail($_POST['email']))) {
                $errors['email'] = "L'email est dÃ©jÃ  utilisÃ©";
            }

            if(empty($_POST['password'])){
                $errors['password'] = "Le mot de passe est obligatoire";
            }elseif(!preg_match("/^[a-zA-Z0-9_-]{6,20}$/", $_POST['password'])){
                $errors['password'] = "Le mot de passe doit faire entre 6 et 20 caractÃ¨res et ne doit contenir que des lettres, des chiffres ou des caractÃ¨res _ et -";
            }

            if(empty($_POST['password_confirm'])){
                $errors['password_confirm'] = "La confirmation du mot de passe est obligatoire";
            }elseif($_POST['password'] != $_POST['password_confirm']){
                $errors['password_confirm'] = "La confirmation du mot de passe n'est pas identique au mot de passe.";
            }
            
            if(empty($_POST['start_date_contract'])){
                $errors['start_date_contract'] = "La date de début de contrat est obligatoire";
            }
            
            if(empty($_POST['billing_address'])){
                $errors['billing_address'] = "L'adresse de facturation est obligatoire";
            }elseif(strlen($_POST['billing_address'])>45){
                $errors['billing_address'] = "L'adresse doit être inférieur à 45 caractères";
            }
            
            if(empty($_POST['postal_code'])){
                $errors['postal_code'] = "Le code postal est obligatoire";
            }elseif(strlen($_POST['postal_code'])>45){
                $errors['postal_code'] = "Le code postal doit être inférieur à 45 caractères";
            }
            
            if(empty($_POST['city'])){
                $errors['city'] = "La ville est obligatoire";
            }elseif(strlen($_POST['city'])>45){
                $errors['city'] = "La ville doit être inférieure à 45 caractères";
            }
            
            if(empty($_POST['country'])){
                $errors['country'] = "Le pays est obligatoire";
            }elseif(strlen($_POST['country'])>45){
                $errors['country'] = "Le pays doit être inférieur à 45 caractères";
            }
                   
            if(empty($_POST['company'])){
                $errors['company'] = "L'entreprise est obligatoire";
            }elseif(strlen($_POST['company'])>45){
                $errors['company'] = "L'entreprise doit être inférieur à 45 caractères";
            }
            
            if(empty($_POST['siret'])){
                $errors['siret'] = "Le siret est obligatoire";
            }elseif(strlen($_POST['siret'])>45){
                $errors['siret'] = "Le siret doit être inférieur à 45 caractères";
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
