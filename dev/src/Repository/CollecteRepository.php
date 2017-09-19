<?php

namespace Repository;

use Entity\AdressesCollectionsHaveCollector;

/**
 * Description of CollecteRepository
 *
 * @author ghmor
 */
class CollecteRepository extends RepositoryAbstract{
    public function save(AdressesCollectionsHaveCollector $collecte){
        $data =[
            'adress_collection_idadress_collection' => $collecte->getAdress_collection_idadress_collection(),
            'collector_idcollector' => $collecte->getCollector_idcollector(),
            'collection_datetime' => $collecte->getCollection_datetime(),
            'bin_number' => $collecte->getBin_number(),
            'processing_datetime' => $collecte->getProcessing_datetime(),
            'weight' => $collecte->getWeight(),
            'compost_quality' => $collecte->getCompost_quality(),
            'further_information' => $collecte->getFurther_information(),
            'processing_location' => $collecte->getProcessing_location()
        ];
        
        if($collecte->getId_adresses_collections_have_collector()){
            $this->db->update('adresses_collections_have_collector', $data,
                    [
                        'id_adresses_collections_have_collector' => $collecte->getId_adresses_collections_have_collector()
                    ]);
        }
        else{
            $this->db->insert('adresses_collections_have_collector', $data);
            $collecte->setId_adresses_collections_have_collector($this->db->lastInsertId());
        }
    }
    
    private function buildEntity(array $data){
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
                ->setProcessing_datetime($data['processing_location']);
        return $collecte;
    }
    
    public function delete(AdressesCollectionsHaveCollector $collecte){
        $this->db->delete('adresses_collections_have_collector', ['id_adresses_collections_have_collector' => $collecte->getId_adresses_collections_have_collector()]);
    }
    
    public function find($id_adresses_collections_have_collector)
    {
        $dbCollecte = $this->db->fetchAssoc(
            'SELECT * FROM adresses_collections_have_collector WHERE id_adresses_collections_have_collector = :id_adresses_collections_have_collector',
            [
                ':id_adresses_collections_have_collector' => $id_adresses_collections_have_collector
            ]
        );
        
        if (!empty($dbCollecte)) {
            return $this->buildEntity($dbCollecte);
        }
    }
}