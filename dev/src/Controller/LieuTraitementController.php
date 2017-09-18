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
        return $this->render('formulaireLieuTraitement.html.twig', 
                ['lieutraitement' => $location]);
    }
}
