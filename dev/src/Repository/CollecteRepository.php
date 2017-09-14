<?php

namespace Repository;

use Entity\AdressesCollectionsHaveCollector;

class CollecteRepository extends RepositoryAbstract{

    public function save(AdressesCollectionsHaveCollector $collecte) {
            $data = [
                //le prochain est commentaire car auto incrémenté
                //'id_adresses_collections_have_collector'=>$collecte->getId_adresses_collections_have_collector(),
                'adress_collection_idadress_collection'=>$collecte->getAdress_collection_idadress_collection(),
                'collector_idcollector'=>$collecte->getCollector_idcollector(),
                'collection_datetime'=> $collecte->getCollection_datetime(),
                'bin_number'=> $collecte->getBin_number(),
                'weight'=> $collecte->getWeight(),
                'compost_quality'=> $collecte->getCompost_quality(),
                'further_information'=>$collecte->getFurther_information(),
                'processing_datetime'=> $collecte->getCollection_datetime(),
                'processing_location'=>$collecte->getProcessing_location()
                ];
            
            if($collecte->getId_adresses_collections_have_collector()){
                    $this->db->update('adresses_collections_have_collector', $data,
                            [
                                'adresses_collections_have_collector' => $collecte->getId_adresses_collections_have_collector()
                            ]);
            }else{
                $this->db->insert('adresses_collections_have_collector',$data);
                $collecte->setId_adresses_collections_have_collector($this->db->lastinsertId());
            }
    }
    
     private function buildEntity(array $data) {
        $collecte = new AdressesCollectionsHaveCollector();
        
        $collecte
            ->setId_adresses_collections_have_collector($data['id_adresses_collections_have_collector'])
            ->setAdress_collection_idadress_collection($data['adress_collection_idadress_collection'])
            ->setCollector_idcollector($data['collector_idcollector'])
            ->setCollection_datetime($data['collection_datetime'])   
            ->setBin_number($data['bin_number'])
            ->setProcessing_datetime($data['processing_datetime'])
            ->setWeight($data['weight'])
            ->setCompost_quality($data['compost_quality'])
            ->setFurther_information($data['further_information'])
            ->setProcessing_location($data['processing_location']);

        
        return $collecte;
    } 
}
