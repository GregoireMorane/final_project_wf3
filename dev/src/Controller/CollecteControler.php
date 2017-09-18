<?php


namespace Controller;

use Entity\AdressesCollectionsHaveCollector;

class CollecteControler extends ControllerAbstract{
    
     // affichage dans la page html
    
    
    public function registerAction() {
        $collecte = new AdressesCollectionsHaveCollector();
        $errors = [];
        //affichages des infos de lieu à collecter
        $adresses = $this->app['adresses_collectes.repository']->findAll();
        //affichages des infos  du collecteur
        $collectors = $this->app['collector.repository']->findAll();
        //affichages des infos de lieu de traitement
        $locations = $this->app['lieutraitement.repository']->findAll();
       
        
            if(!empty($_POST)){
                 $collecte
            ->setBin_number($_POST['bin_number'])
            ->setAdress_collection_idadress_collection($_POST['adress_collection_idadress_collection'])
            ->setCollection_datetime($_POST['collection_datetime'])
            ->setWeight($_POST['weight'])
            ->setFurther_information($_POST['further_information']);
                if(empty($errors)){
                
                $this->app['collecte.repository']->save($collecte);
                
                return $this->redirectRoute('homepage');
                
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
                'addresses' => $adresses,
                'collectors' => $collectors,
                'locations' => $locations
            ]
        );
    }
}