<?php



namespace Repository;

use Entity\AdressesCollectes;


class AdressesCollectesRepository extends RepositoryAbstract{
    
    public function findAll() 
    {
        $dbAddresses = $this->db->fetchAll('SELECT * FROM adresses_collectes ORDER BY id_collection_address');
        $addresses =[];
        
        foreach ($dbAddresses as $dbAdress){
            $addresses[] = $this->buildEntity($dbAddresses);
        }
        return $addresses;
    }
    
    private function buildEntity(array $data) 
            {
                $address = new AdressesCollectes();
                
                $address 
                     ->setId_collection_address($data['id_collection_address'])
                     ->setAdress_collection($data['adress_collection'])
//                     ->setPostal_code($data['postal_code'])
//                     ->setCity($data['city'])
//                     ->setFurther_information($data['further_information'])
//                     ->setCountry($data['country'])
//                     ->setCollection_day($data['collection_day'])
//                     ->setClient_idclient($data['client_idclient'])
//                     ->setLocation_processing_idlocation_processing($data['location_processing_idlocation_processing'])
//                     ->setFirm_type($data['firm_type'])
                    ;
                
                        return $address;
    }
    
}

