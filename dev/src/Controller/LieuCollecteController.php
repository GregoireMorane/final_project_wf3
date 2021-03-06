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
//    public function listAction() {
//        $lieux = $this->app['lieucollecte.repository']->findByEmptyWeight();
//        return $this->render('comptecollecteur.html.twig',
//            [
//               'lieux' => $lieux
//            ]
//        );
//    }
    
    public function registerAction($id = null){
        if(is_null($id)){
            $lieu = new LieuCollecte();
        }
        else{
            $lieu = $this->app['lieucollecte.repository']->find($id);
            if(is_null($lieu)){
                $this->app->abort(404);
            }
        }
        //$lieu = new LieuCollecte();
        $errors = [];
        //afficahge des infos des infos clients 
        $clients = $this->app['client.repository']->findAll();
        //affichages des infos de lieu de traitement
        $locations = $this->app['lieutraitement.repository']->findAll();
        
        if(!empty($_POST)){
            
                $lieu
                    ->setAddress_collection($_POST['address_collection'])
                    ->setAddress_name($_POST['address_name'])
                    ->setPostal_code($_POST['postal_code'])
                    ->setCity($_POST['city'])
                    ->setFurther_information($_POST['further_information'])
                    ->setCountry($_POST['country'])
                    ->setCollection_day($_POST['collection_day'])
                    ->setClient_idclient($_POST['client_idclient'])
                    ->setLocation_processing_idlocation_processing($_POST['location_processing_idlocation_processing'])
                    ->setFirm_type($_POST['firm_type']);
            
            if(empty($_POST['client_idclient'])){
                $errors['client_idclient'] = "Le client est obligatoire";
            }
            
            if(empty($_POST['address_collection'])){
                $errors['address_collection'] = "L'adresse est obligatoire";
            }
            
            if(empty($_POST['firm_type'])){
                $errors['firm_type'] = "Le type d'établissement est obligatoire";
            }
            
            if(empty($_POST['city'])){
                $errors['city'] = "La ville est obligatoire";
            }
            
            if(empty($_POST['postal_code'])){
                $errors['postal_code'] = "Le code postal est obligatoire";
            }
            
            if(empty($_POST['country'])){
                $errors['country'] = "Le pays est obligatoire";
            }
            
            if(empty($_POST['location_processing_idlocation_processing'])){
                $errors['location_processing_idlocation_processing'] = "L'adresse de traitement est obligatoire";
            }   
                
            if(empty($errors)){
                $this->app['lieucollecte.repository']->save($lieu);
                $message = '<strong>L\'adresse de collecte à bien été enregistré</strong>';
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
            'admin/formulaireAdresseCollecte.html.twig',
            [
                'adresses_collectes' => $lieu,
                'clients' =>$clients,
                'firm_type' =>array('epicerie' => "Epicerie",'restaurant' => "Restaurant",'restaurantCollectif' => "Restaurant collectif"),
                'collection_day' =>array('lundi' => "Lundi",'mardi' => "Mardi",'mercredi' => "Mercredi",'jeudi' => "Jeudi",'vendredi' => "Vendredi",'samedi' => "Samedi",'dimanche' => "Dimanche"),
                'locations' => $locations
            ]
        );
    }
    
    public function editAction($id = null){
        if(is_null($id)){
            $lieu = new LieuCollecte();
        }
        else{
            $lieu = $this->app['lieucollecte.repository']->find($id);
            if(is_null($lieu)){
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        //afficahge des infos des infos clients 
        $clients = $this->app['client.repository']->findAll();
        //affichages des infos de lieu de traitement
        $locations = $this->app['lieutraitement.repository']->findAll();
        
        if(!empty($_POST)){
            
                $lieu
                    ->setAddress_collection($_POST['address_collection'])
                    ->setAddress_name($_POST['address_name'])
                    ->setPostal_code($_POST['postal_code'])
                    ->setCity($_POST['city'])
                    ->setFurther_information($_POST['further_information'])
                    ->setCountry($_POST['country'])
                    ->setCollection_day($_POST['collection_day'])
                    ->setClient_idclient($_POST['client_idclient'])
                    ->setLocation_processing_idlocation_processing($_POST['location_processing_idlocation_processing'])
                    ->setFirm_type($_POST['firm_type']);
            
            if(empty($_POST['client_idclient'])){
                $errors['client_idclient'] = "Le client est obligatoire";
            }
            
            if(empty($_POST['address_collection'])){
                $errors['address_collection'] = "L'adresse est obligatoire";
            }
            
            if(empty($_POST['firm_type'])){
                $errors['firm_type'] = "Le type d'établissement est obligatoire";
            }
            
            if(empty($_POST['city'])){
                $errors['city'] = "La ville est obligatoire";
            }
            
            if(empty($_POST['postal_code'])){
                $errors['postal_code'] = "Le code postal est obligatoire";
            }
            
            if(empty($_POST['country'])){
                $errors['country'] = "Le pays est obligatoire";
            }
            
            if(empty($_POST['location_processing_idlocation_processing'])){
                $errors['location_processing_idlocation_processing'] = "L'adresse de traitement est obligatoire";
            }   
                
            if(empty($errors)){
                $this->app['lieucollecte.repository']->save($lieu);
                $message = '<strong>L\'adresse de collecte à bien été mis à jour</strong>';
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
            'admin/formulaireAdresseCollecte.html.twig',
            [
                'adresses_collectes' => $lieu,
                'clients' =>$clients,
                'locations' => $locations,
            ]
        );
    }
    
    public function listAllLieuxCollecte(){
        $collectes = $this->app['lieucollecte.repository']->findAll();
        
        return $this->render(
            'listLieuxCollecte.html.twig',
            [
                'collectes' => $collectes
            ]
        );
    }
    
    public function deleteAction($id){
       
        $lieucollecte = $this->app['lieucollecte.repository']->find($id);
        
        $this->app['lieucollecte.repository']->delete($lieucollecte);
        
        $message ='le lieu de collecte a été supprimé';
        $this->addFlashMessage($message, 'success');
        return $this->redirectRoute('listelieucollecte');
    }
}
