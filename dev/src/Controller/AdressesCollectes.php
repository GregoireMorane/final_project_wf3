<?php


namespace Controller;

class AdressesCollectes {
    
     public function listAction() 
    {
        $addresses = $this->app['adressescollectes.repository']->findAll();
        return $this->render('formulairedecollecte.html.twig',
            [
               'addresses' => $addresses
            ]
            );
    }
    
}
