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
                ->setProcessing_location_id_location_processing($data['processing_location_id_location_processing'])
                ->setTraitement_name($data['traitement_name'])
                ->setCollector_lastname($data['collector_lastname'])
                ->setCollector_firstname($data['collector_firstname'])
                ;
    
        return $traitementAsCollector;
    }
    
    public function delete(TraitementCollector $id){
        
        $this->db->delete('collector_has_processing_location', ['id_collector_has_processing_location' => $id->getId_collector_has_processing_location()]);
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
    
    public function findAll() 
    {
        $dbLieux = $this->db->fetchAll('SELECT chpl.*, c.firstname AS collector_firstname, c.lastname AS collector_lastname, pl.processing_location AS traitement_nom FROM collector_has_processing_location chpl JOIN collector c ON chpl.collector_idcollector = c.idcollector JOIN processing_location pl ON chpl.processing_location_id_location_processing = pl.id_location_processing ORDER BY traitement_nom ASC');
        $lieux =[];
        
        foreach ($dbLieux as $dbLieu){
            $lieux[] = $this->buildEntityFind($dbLieu);
        }
        return $lieux;
    }
    
    private function buildEntityFind(array $data){
        $traitementAsCollector = new TraitementCollector();
        
        $traitementAsCollector
                ->setId_collector_has_processing_location($data['id_collector_has_processing_location'])
                ->setCollector_idcollector($data['collector_idcollector'])
                ->setProcessing_location_id_location_processing($data['processing_location_id_location_processing'])
                ->setTraitement_nom($data['traitement_nom'])
                ->setCollector_lastname($data['collector_lastname'])
                ->setCollector_firstname($data['collector_firstname'])
                ;
    
        return $traitementAsCollector;
    }
    
}

