<?php

namespace Controller;

use Entity\TraitementCollector;

/**
 * Description of TraitementCollectorController
 *
 * @author ghmor
 */
class TraitementCollectorController extends ControllerAbstract{
    public function registerAction(){
        $collectorAsTraitement = new TraitementCollector();
        $errors = [];
        
        if(!empty($_POST)){
            $collectorAsTraitement->setCollector_idcollector($_POST['collector_idcollector'])
                    ->setProcessing_location_id_location_processing($_POST['processing_location_id_location_processing']);
        
            if(empty($errors)){
                $this->app['traitementcollector.repository']->save($collectorAsTraitement);
                return $this->redirectRoute('homepage');
            }
            else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render(
            'admin/formulaireTraitementCollector.twig.html',
            [
                'collectorAsTraitement' => $collectorAsTraitement
            ]
        );
    }
}
