<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Repository;

use Entity\TraitementCollector;

/**
 * Description of TraitementCollectorRepository
 *
 * @author ghmor
 */
class TraitementCollectorRepository extends RepositoryAbstract{
    public function save(TraitementCollector $traitementAsCollector){
        $data =[
            'collector_idcollector' => $traitementAsCollector->getCollector_idcollector(),
            'processing_location_id_location_processing' => $traitementAsCollector->getProcessing_location_id_location_processing()
        ];
        
        if($traitementAsCollector->getId_collector_has_processing_location()){
            $this->db->update('collector_has_processing_location', $data,
                    [
                       'id_collector_has_processing_location' => $traitementAsCollector->getId_collector_has_processing_location()
                    ]);
        }
        else{
            $this->db->insert('collector_has_processing_location', $data);
            $traitementAsCollector->setId_collector_has_processing_location($this->db->lastInsertId());
        }
    }
    
    private function buildEntity(array $data){
        $traitementAsCollector = new TraitementCollector();
        
        $traitementAsCollector
                ->setId_collector_has_processing_location($data['id_collector_has_processing_location'])
                ->setCollector_idcollector($data['collector_idcollector'])
                ->setProcessing_location_id_location_processing($data['processing_location_id_location_processing']);
    
        return $traitementAsCollector;
    }
    
    public function delete(TraitementCollector $traitementcollector){
        $this->db->delete('collector_has_processing_location', ['id_collector_has_processing_location' => $traitementcollector->getId_collector_has_processing_location()]);
    }
    
    public function find($id_collector_has_processing_location)
    {
        $dbtraitementcollector = $this->db->fetchAssoc(
            'SELECT * FROM collector_has_processing_location WHERE id_collector_has_processing_location = :id_collector_has_processing_location',
            [
                ':id_collector_has_processing_location' => $id_collector_has_processing_location
            ]
        );
        
        if (!empty($dbtraitementcollector)) {
            return $this->buildEntity($dbtraitementcollector);
        }
    }
    
}
