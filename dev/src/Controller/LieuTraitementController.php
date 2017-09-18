<?php

namespace Controller;

use Entity\ProcessingLocation;

/**
 * Description of LieuTraitementController
 *
 * @author ghmor
 */
class LieuTraitementController extends ControllerAbstract{
    public function registerAction(){
        $location = new ProcessingLocation();
        $errors = [];
        $clients = $this->app['client.repository']->findAll();
        //affichages des infos de lieu de traitement
        $locations = $this->app['lieutraitement.repository']->findAll();
        
        if(!empty($_POST)){
            $location->setProcessing_location($_POST['processing_location'])
                     ->setProcessing_address($_POST['processing_address'])
                     ->setPostal_code($_POST['postal_code'])
                     ->setCity($_POST['city'])
                     ->setCountry($_POST['country'])
                    ;
            
            if(empty($_POST['processing_location'])){
                $errors['processing_location'] = "Le lieu de traitement est obligatoire";
            }
            
            if(empty($_POST['processing_address'])){
                $errors['processing_address'] = "L'adresse du lieu de traitement est obligatoire";
            }
            
            if(empty($_POST['postal_code'])){
                $errors['postal_code'] = "Le code postal est obligatoire";
            }
            
            if(empty($_POST['city'])){
                $errors['city'] = "La ville est obligatoire";
            }
            
            if(empty($_POST['country'])){
                $errors['country'] = "Le pays est obligatoire";
            }
            
            if(empty($errors)){
                $this->app['lieutraitement.repository']->save($location);
                $message = '<strong>Le lieu de traitement à bien été enregistré</strong>';
                $this->addFlashMessage($message, 'success');
                return $this->redirectRoute('compteadmin');
            }
            else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render('admin/formulaireLieuTraitement.html.twig', 
                [
                    'lieutraitement' => $location,
                    'clients' =>$clients,
                    'locations' => $locations
                ]);
    }
}
