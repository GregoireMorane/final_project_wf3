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
//            
//            if(empty($_POST['start_date_contract'])){
//                $errors['start_date_contract'] = "La date de d�but de contrat est obligatoire";
//            }
//            
//            if(empty($_POST['billing_address'])){
//                $errors['billing_address'] = "L'adresse de facturation est obligatoire";
//            }elseif(strlen($_POST['billing_address'])>45){
//                $errors['billing_address'] = "L'adresse doit �tre inf�rieur � 45 caract�res";
//            }
//            
//            if(empty($_POST['postal_code'])){
//                $errors['postal_code'] = "Le code postal est obligatoire";
//            }elseif(strlen($_POST['postal_code'])>45){
//                $errors['postal_code'] = "Le code postal doit �tre inf�rieur � 45 caract�res";
//            }
//            
//            if(empty($_POST['city'])){
//                $errors['city'] = "La ville est obligatoire";
//            }elseif(strlen($_POST['city'])>45){
//                $errors['city'] = "La ville doit �tre inf�rieure � 45 caract�res";
//            }
//            
//            if(empty($_POST['country'])){
//                $errors['country'] = "Le pays est obligatoire";
//            }elseif(strlen($_POST['country'])>45){
//                $errors['country'] = "Le pays doit �tre inf�rieur � 45 caract�res";
//            }
//                   
//            if(empty($_POST['company'])){
//                $errors['company'] = "L'entreprise est obligatoire";
//            }elseif(strlen($_POST['company'])>45){
//                $errors['company'] = "L'entreprise doit �tre inf�rieur � 45 caract�res";
//            }
//            
//            if(empty($_POST['siret'])){
//                $errors['siret'] = "Le siret est obligatoire";
//            }elseif(strlen($_POST['siret'])>45){
//                $errors['siret'] = "Le siret doit �tre inf�rieur � 45 caract�res";
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
            'admin/formulaireClient.html.twig',
            [
                'client' => $client
            ]
        );
    }
}
