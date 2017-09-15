<?php

namespace Controller;

use Entity\OutputCompost;

/**
 * Description of OutputCompostController
 *
 * @author ghmor
 */
class OutputCompostController extends ControllerAbstract{
    public function registerAction(){
        $output = new OutputCompost();
        $errors = [];
         //affichages des infos  du collecteur
        $collectors = $this->app['collector.repository']->findAll();
        //affichages des infos de lieu de traitement
        $locations = $this->app['lieutraitement.repository']->findAll();
        
        if(!empty($_POST)){
            $output->setOutput_datetime($_POST['output_datetime'])
                    ->setQuantity_exit($_POST['quantity_exit'])
                    ->setLocation_processing_idlocation_processing($_POST['location_processing_idlocation_processing'])
                    ->setCollector_idcollector($_POST['collector_idcollector']);
            
            if(empty($errors)){
                $this->app['outputcompost.repository']->save($output);
                return $this->redirectRoute('homepage');
            }
            else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
                
            }
        }
        return $this->render(
                    'collector/formulaireOutputCompost.html.twig',
                    [
                        'output' => $output,
                        'collectors' => $collectors,
                        'locations' => $locations
                    ]
                );
    }
}
