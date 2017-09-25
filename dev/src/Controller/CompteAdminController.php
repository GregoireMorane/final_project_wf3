<?php

namespace Controller;

use Entity\Collector;

class CompteAdminController extends ControllerAbstract{
      
    public function listAction() {
       // $clients = $this->app['client.repository']->findAll();
    //    $collectors = $this->app['collector.repository']->findAllByLocation();
        
        // pour les biodéchets
        $totalweightbyweek = $this->app['collecte.repository']->findTotalBioWasteWeightByWeek();
        $totalweight = $this->app['collecte.repository']->findTotalBioWasteWeight();
        $locations = $this->app['lieutraitement.repository']->findAll();
        //pour le compost (matière valorisé)
        $totalweightoutputcompost = $this->app['outputcompost.repository']->findTotalCompostWeight();
        $totalweightoutputcompostbyweek = $this->app['outputcompost.repository']->findTotalCompostWeightByWeek();
        
        foreach ($locations as $location) {
            $collectors = $this->app['collector.repository']->findAllByLocationId($location->getId_location_processing());
            $Lieux = $this->app['lieucollecte.repository']->findAllByLocationId($location->getId_location_processing());
            $clients = $this->app['client.repository']->findAllByLocationId($location->getId_location_processing());
            
            $location->setCollectors($collectors);
            $location->setLieux($Lieux);
            $location->setClients($clients);
        } 
        
        return $this->render('compteadmin.html.twig', 
                    [
                    'locations' => $locations,
                    'clients' => $clients, //pour la requete 2 du client.rep
                    'totalweight' => $totalweight,
                    'totalweightbyweek' => $totalweightbyweek,
                    'totalweightoutputcompost' => $totalweightoutputcompost,
                    'totalweightoutputcompostbyweek' => $totalweightoutputcompostbyweek,
                    'collectors' => $collectors,
                    'clients' => $clients
                    ]
        );
    }
}