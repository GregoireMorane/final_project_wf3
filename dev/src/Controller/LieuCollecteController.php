<?php

namespace Controller;

use Controller\ControllerAbstract;
use Entity\LieuCollecte;

/**
 * Description of LieuCollecteController
 *
 * @author ghmor
 */
class LieuCollecteController extends ControllerAbstract{
    public function registerAction(){
        $lieu = new LieuCollecte();
        $errors = [];
        
        if(!empty($_POST)){
            
            $lieu->setAddress_collection($_POST['adress_collection'])
                    ->setPostal_code($_POST['postal_code'])
                    ->setCity($_POST['city'])
                    ->setFurther_information($_POST['further_information'])
                    ->setCountry($_POST['country'])
                    ->setCollection_day($_POST['collection_day'])
                    ->setClient_idclient($_POST['client_idclient'])
                    ->setLocation_processing_idlocation_processing($_POST['location_processing_idlocation_processing'])
                    ->setFirm_type($_POST['firm_type']);
            
            if(empty($errors)){
                $this->app['lieucollecte.repository']->save($lieu);
                return $this->redirectRoute('homepage');
            }
            else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render(
            'admin/formulaireAdresseCollecte.html.twig',
            [
                'adresses_collectes' => $lieu
            ]
        );
    }
}
