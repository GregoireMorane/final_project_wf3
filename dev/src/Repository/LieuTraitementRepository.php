<?php

namespace Repository;

use Entity\ProcessingLocation;


class LieuTraitementRepository extends RepositoryAbstract{
    public function save(ProcessingLocation $location){
        $data = [
            'processing_location' => $location->getProcessing_location(),
            'processing_address' => $location->getProcessing_address(),
            'postal_code' => $location->getPostal_code(),
            'city' => $location->getCity(),
            'country' => $location->getCountry(),
        ];
        
        if($location->getId_location_processing())
        {
            $this->db->update('processing_location', $data,
                    [
                        'id_location_processing' => $location->getId_location_processing()
                    ]);
        }
        else
        {
            $this->db->insert('processing_location', $data);
            $location->setId_location_processing($this->db->lastInsertId());
        }
    }
    //fonction pour boucler sur les lieux de traitements
     public function findAll() 
    {
        $dbLocations = $this->db->fetchAll('SELECT * FROM processing_location ORDER BY id_location_processing');
        $locations =[];
        
        foreach ($dbLocations as $dbLocation){
            $locations[] = $this->buildEntity($dbLocation);
        }
        return $locations;
    }
    
    private function buildEntity(array $data)
    {
        $location = new ProcessingLocation;
        
        $location
                ->setId_location_processing($data['id_location_processing'])
                ->setProcessing_location($data['processing_location'])
                ->setProcessing_address($data['processing_address'])
                ->setPostal_code($data['postal_code'])
                ->setCity($data['city'])
                ->setCountry($data['country']);
        return $location;
    }
    
    public function delete(ProcessingLocation $location){
        $this->db->delete('processing_location', ['id_location_processing' => $location->getId_location_processing()]);
    }
    
    public function find($id)
    {
        $dbLocation = $this->db->fetchAssoc(
            'SELECT * FROM processing_location WHERE id_location_processing = :id_location_processing',
            [
                ':id_location_processing' => $id
            ]
        );
        
        if (!empty($dbLocation)) {
            return $this->buildEntity($dbLocation);
        }
    }
    
}
