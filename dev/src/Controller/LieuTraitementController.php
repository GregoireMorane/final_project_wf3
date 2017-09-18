<?php

namespace Controller;

use Entity\ProcessingLocation;
Use Repository\LieuTraitementRepository;

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
            
            if(empty($errors)){
                $this->app['lieutraitement.repository']->save($location);
                return $this->redirectRoute('homepage');
            }
            else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render('admin/formulaireLieuTraitement.html.twig', 
                [
                    'lieutraitement' =>$location,
                    'clients' =>$clients,
                    'locations' =>$locations
                ]);
        
    }
    public function listAction() {
        $clients = $this->app['client.repository']->findAll();
        $collectors = $this->app['collector.repository']->findAll();
        $locations = $this->app['lieutraitement.repository']->findAll();
        return $this->render('compteadmin.html.twig', 
                    [
                    'locations' => $locations,
                    'collectors' => $collectors,
                    'clients' => $clients
                    ]
        );
    }
}
