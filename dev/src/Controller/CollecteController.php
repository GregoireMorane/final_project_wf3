<?php

namespace Controller;

use Entity\AdressesCollectionsHaveCollector;

/**
 * Description of CollecteController
 *
 * @author ghmor
 */
class CollecteController extends ControllerAbstract{
    public function registerAction(){
        $collecte = new AdressesCollectionsHaveCollector();
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
                    ->setTransformation_place($_POST['processing_location']);
        
            if(empty($errors)){
                $this->app['collecte.repository']->save($collecte);
                return $this->redirectRoute('homepage');
            }
            else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render('collector/formulaireDeCollecte.html.twig',
                [
                    'collecte' => $collecte
                ]
        );
    }
}
