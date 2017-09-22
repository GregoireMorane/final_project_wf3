<?php

namespace Controller;

use Entity\Collector;

class CollectorController extends ControllerAbstract{
    
     public function listAction() 
    {
        $collectors = $this->app['collector.repository']->findAll();
        $date = new \DateTime();
        $tomorrow = new \DateTime('+1 day');
        //echo $tomorrow->format('Y-m-d');
        $user = $this->app['user.manager']->getUser();
        $lieux = $this->app['lieucollecte.repository']->findAllByEmptyWeight($user->getIdCollector());
        $adresses = $this->app['lieucollecte.repository']->findNameByCollectionDate($user->getIdCollector(), $date);
        $adressesTomorrow = $this->app['lieucollecte.repository']->findNameByCollectionDate($user->getIdCollector(), $tomorrow);
        $totalOutput = $this->app['outputcompost.repository']->totalOutputByCollector($user->getIdCollector());
        $weeklyOutput = $this->app['outputcompost.repository']-> weekOutputByCollector($user->getIdCollector(), $date);
        $totalWaste = $this->app['collecte.repository']->totalWasteByCollector($user->getIdCollector());
        $weeklyWaste = $this->app['collecte.repository']-> weekWasteByCollector($user->getIdCollector(), $date);
        $bins = $this->app['collecte.repository']->findBinByEmptyWeight($user->getIdCollector());
        
        return $this->render('comptecollecteur.html.twig',
            [
               'collectors' => $collectors,
               'lieux' => $lieux,
               'adresses' => $adresses,
               'adressesTomorrow'=> $adressesTomorrow,
               'totalOutput' => $totalOutput,
               'weeklyOutput' => $weeklyOutput,
               'totalWaste' => $totalWaste,
               'weeklyWaste' => $weeklyWaste,
               'bins' => $bins
            ]
        );
    }
    
    public function registerAction($id = null) {
        
         if(is_null($id)){
            $collector = new Collector();
        } else {
            $collector = $this->app['collector.repository']->find($id);
            if(is_null($collector)){
                $this->app->abort(404);
            }
        }
        //$collector = new Collector();
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
    
    public function editAction($id = null){
        if(is_null($id)){
            $collector = new Collector();
        }
        else{
            $collector = $this->app['collector.repository']->finc($id);
            if(is_null($collector)){
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        if(!empty($_POST)){
            $collecte->setAdress_collection_idadress_collection($_POST['adress_collection_idadress_collection'])
                    ->setCollector_idcollector($_POST['collector_idcollector'])
                    ->setCollection_datetime($_POST['collection_datetime'])
                    ->setBin_number($_POST['bin_number'])
                    ->setProcessing_datetime($_POST['processing_datetime'])
                    ->setWeight($_POST['weight'])
                    ->setCompost_quality($_POST['compost_quality'])
                    ->setFurther_information($_POST['further_information'])
                    ->setProcessing_location($_POST['processing_location']);

            if(empty($_POST['adress_collection_idadress_collection'])){
                $errors['adress_collection_idadress_collection'] = "L'adresse est obligatoire";
            }
            
            if(empty($_POST['collector_idcollector'])){
                $errors['collector_idcollector'] = "Le collecteur est obligatoire";
            }
            
            if(empty($_POST['collection_datetime'])){
                $errors['collection_datetime'] = "La date de heure est obligatoire";
            }
            
            if(empty($_POST['bin_number'])){
                $errors['bin_number'] = "Le numéro du bac obligatoire";
            }

            if(empty($errors)){
                $this->app['collecte.repository']->save($collecte);
                $message = '<strong>La collecte à bien été mis à jour</strong>';
                $this->addFlashMessage($message, 'success');
                return $this->redirectRoute('comptecollecteur');
            }else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render(
            'collector/formulairedecollecte.html.twig',
            [
                'collecte' => $collecte,
                'lieux' => $lieux,
                'collectors' => $collectors,
                'locations' => $locations
            ]
        );
    }
    
    public function listAllCollectors(){
        $collectors = $this->app['collector.repository']->findAll();
        
        return $this->render(
            'listCollector.html.twig',
            [
                'collectors' => $collectors
            ]
        );
    }
    
}
