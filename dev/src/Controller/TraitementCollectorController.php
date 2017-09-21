<?php

namespace Controller;

use Entity\TraitementCollector;

/**
 * Description of TraitementCollectorController
 *
 * @author ghmor
 */
class TraitementCollectorController extends ControllerAbstract{
    public function registerAction($id = null){
        
        if(is_null($id)){
             $collectorAsTraitement = new TraitementCollector();
        } else {
            $collectorAsTraitement = $this->app['traitementcollector.repository']->find($id);
            if(is_null($collectorAsTraitement)){
                $this->app->abort(404);
            }
        }
        
       
        $errors = [];
        
        //affichages des infos de lieu du collecteur
        $collectors = $this->app['collector.repository']->findAll();
         //affichages des infos de lieu de traitement
        $locations = $this->app['lieutraitement.repository']->findAll();
        
        if(!empty($_POST)){
            $collectorAsTraitement->setCollector_idcollector($_POST['collector_idcollector'])
                    ->setProcessing_location_id_location_processing($_POST['processing_location_id_location_processing']);
        
            if(empty($errors)){
                $this->app['traitementcollector.repository']->save($collectorAsTraitement);
                $message = '<strong>Le collecteur à bien été assigné au lieu de traitement</strong>';
                $this->addFlashMessage($message, 'success');
                return $this->redirectRoute('compteadmin');
            }
            else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render(
            'admin/formulaireTraitementCollector.html.twig',
            [
                'collectorAsTraitement' => $collectorAsTraitement,
                'collectors' => $collectors,
                'locations' => $locations,
            ]
        );
    }
}
