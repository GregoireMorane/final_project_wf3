<?php

namespace Controller;

use Entity\Collector;

class CompteAdmin extends ControllerAbstract{
    
    public function listAction() {
        $collector = $this->app['collector.repository']->findAll();
        return $this->render('admin/compteadmin.html.twig', [
                    'collectors' => $collectors,
                    'locations' => $locations 
                        ]
        );
    }
}