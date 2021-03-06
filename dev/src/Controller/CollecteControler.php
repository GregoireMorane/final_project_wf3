<?php


namespace Controller;

use Entity\AdressesCollectionsHaveCollector;

class CollecteControler extends ControllerAbstract{
    
     // affichage dans la page html
    
    
    public function registerAction($id = null) {
           
        if(is_null($id)){
            $collecte = new AdressesCollectionsHaveCollector();
        } else {
            $collecte = $this->app['collecte.repository']->find($id);
            if(is_null($collecte)){
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        //affichages des infos de lieu à collecter
        $lieux = $this->app['lieucollecte.repository']->findAll();
        //affichages des infos  du collecteur
        $collectors = $this->app['collector.repository']->findAll();
        //affichages des infos de lieu de traitement
        $locations = $this->app['lieutraitement.repository']->findAll();
        $user = $this->app['user.manager']->getUser();
        
        if(!empty($_POST)){
            $this->sanitizePost();
            $collecte
                    ->setAdress_collection_idadress_collection($_POST['adress_collection_idadress_collection'])
                    ->setCollector_idcollector($_POST['collector_idcollector'])
//                    ->setCollection_datetime($_POST['collection_datetime'])
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
            
//            if(empty($_POST['collection_datetime'])){
//                $errors['collection_datetime'] = "La date de heure est obligatoire";
//            }
            
            if(empty($_POST['bin_number'])){
                $errors['bin_number'] = "Le numéro du bac obligatoire";
            }elseif (!is_numeric($_POST['bin_number'])) {
                $errors['bin_number'] = "Veuillez saisir un numéro de bac valide";
            }

            if(empty($errors)){
                $this->app['collecte.repository']->save($collecte);
                $message = '<strong>La collecte à bien été enregistré</strong>';
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
                'locations' => $locations,
                'user' => $user
            ]
        );
    }
    
    public function editAction($id = null){
        if(is_null($id)){
            $collecte = new AdressesCollectionsHaveCollector();
        }
        else{
            $collecte = $this->app['collecte.repository']->find($id);
            if(is_null($collecte)){
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        //affichages des infos de lieu à collecter
        $lieux = $this->app['lieucollecte.repository']->findAll();
        //affichages des infos  du collecteur
        $collectors = $this->app['collector.repository']->findAll();
        //affichages des infos de lieu de traitement
        $locations = $this->app['lieutraitement.repository']->findAll();
        if(!empty($_POST)){
            $this->sanitizePost();
            $collecte->setAdress_collection_idadress_collection($_POST['adress_collection_idadress_collection'])
                    ->setCollector_idcollector($_POST['collector_idcollector'])
//                    ->setCollection_datetime($_POST['collection_datetime'])
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
            
//            if(empty($_POST['collection_datetime'])){
//                $errors['collection_datetime'] = "La date de heure est obligatoire";
//            }
            
            if(empty($_POST['bin_number'])){
                $errors['bin_number'] = "Le numéro du bac obligatoire";
            }elseif (!is_numeric($_POST['bin_number'])) {
                $errors['bin_number'] = "Veuillez saisir un numéro de bac valide";
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
}
