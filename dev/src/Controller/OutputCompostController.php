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
            
            if(empty($_POST['output_datetime'])){
                $errors['output_datetime'] = "La date est obligatoire";
            }
            
            if(empty($_POST['quantity_exit'])){
                $errors['quantity_exit'] = "La quantité est obligatoire";
            }
            
            if(empty($_POST['location_processing_idlocation_processing'])){
                $errors['location_processing_idlocation_processing'] = "Le lieu de traitement est obligatoire";
            }
            
            if(empty($_POST['collector_idcollector'])){
                $errors['collector_idcollector'] = "Le collecteur est obligatoire";
            }
            
            if(empty($errors)){
                $this->app['outputcompost.repository']->save($output);
                $message = '<strong>La sortie à bien été enregistré</strong>';
                $this->addFlashMessage($message, 'success');
                return $this->redirectRoute('comptecollecteur');
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
    
    public function editAction($id = null){
        if(is_null($id)){
            $output = new OutputCompost();
        }
        else{
            $output = $this->app['outputcompost.repository']->find($id);
            if(is_null($output)){
                $this->app->abort(404);
            }
        }
        
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
            
            if(empty($_POST['output_datetime'])){
                $errors['output_datetime'] = "La date est obligatoire";
            }
            
            if(empty($_POST['quantity_exit'])){
                $errors['quantity_exit'] = "La quantité est obligatoire";
            }
            
            if(empty($_POST['location_processing_idlocation_processing'])){
                $errors['location_processing_idlocation_processing'] = "Le lieu de traitement est obligatoire";
            }
            
            if(empty($_POST['collector_idcollector'])){
                $errors['collector_idcollector'] = "Le collecteur est obligatoire";
            }
            
            if(empty($errors)){
                $this->app['outputcompost.repository']->save($output);
                $message = '<strong>La sortie à bien été mis à jour</strong>';
                $this->addFlashMessage($message, 'success');
                return $this->redirectRoute('comptecollecteur');
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
