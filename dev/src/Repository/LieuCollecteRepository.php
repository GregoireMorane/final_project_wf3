<?php

namespace Repository;

use Entity\LieuCollecte;

/**
 * Description of LieuCollecteRepository
 *
 * @author ghmor
 */
class LieuCollecteRepository extends RepositoryAbstract{
    
    public function save(LieuCollecte $lieu)
    {
        $data = [
          'adress_collection' => $lieu->getAddress_collection(),
          'postal_code' => $lieu->getPostal_code(),
          'city' => $lieu->getCity(),
          'further_information' => $lieu->getFurther_information(),
          'country' => $lieu->getCountry(),
          'collection_day' => $lieu->getCollection_day(),
          'client_idclient' => $lieu->getClient_idclient(),
          'location_processing_idlocation_processing' => $lieu->getLocation_processing_idlocation_processing(),
          'firm_type' => $lieu->getFirm_type()
        ];
        if($lieu->getId_collection_address()){
            $this->db->update('adresses_collectes', $data, 
                    [
                       'id_collection_address' => $lieu->getId_collection_address() 
                    ]);
        }
        else{
            $this->db->insert('adresses_collectes', $data);
            $lieu->setId_collection_address($this->db->lastInsertId());
        }
    }
    
    private function buildEntity(array $data){
        $lieu = new LieuCollecte();
        
       $lieu->setId_collection_address($data['id_collection_address'])
               ->setAddress_collection($data['adress_collection'])
               ->setPostal_code($data['postal_code'])
               ->setCity($data['city'])
               ->setFurther_information($data['further_information'])
               ->setCountry($data['country'])
               ->setCollection_day($data['collection_day'])
               ->setClient_idclient($data['client_idclient'])
               ->setLocation_processing_idlocation_processing($data['location_processing_idlocation_processing'])
               ->setFirm_type($data['firm_type']);
       
       return $lieu;
    }
}
