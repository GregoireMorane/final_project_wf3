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
          'address_collection' => $lieu->getAddress_collection(),
          'address_name' => $lieu->getAddress_name(),
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
    
    public function findLieuCollecteByClientId($id) {
        $query = <<<SQL
SELECT ac.*
FROM adresses_collectes ac
WHERE client_idclient = :id
ORDER BY id_collection_address
SQL;
        
        $dbLieux = $this->db->fetchAll($query, [':id' => $id]);
        $lieux =[];
        
        foreach ($dbLieux as $dbLieu){
            $lieux[] = $this->buildEntity($dbLieu);
        }
        
        return $lieux;
    }
    
    public function findAllByEmptyWeight($id) {
        $dbLieux = $this->db->fetchAll(
                'SELECT a.* FROM adresses_collectes a '
                . ' JOIN adresses_collections_have_collector b ON a.id_collection_address = b.adress_collection_idadress_collection'
                . ' WHERE b.weight = 0 AND b.collector_idcollector = :id', [':id' => $id]);
        $lieux =[];
        foreach ($dbLieux as $dbLieu){
            $lieux[] = $this->buildEntity($dbLieu);
        }
        return $lieux;
    }
    
    private function buildEntity(array $data){
        $lieu = new LieuCollecte();
      
        $lieu
                ->setId_collection_address($data['id_collection_address'])
                ->setAddress_name($data['address_name'])
                ->setAddress_collection($data['address_collection'])
                ->setPostal_code($data['postal_code'])
                ->setCity($data['city'])
                ->setFurther_information($data['further_information'])
                ->setCountry($data['country'])
                ->setCollection_day($data['collection_day'])
                ->setClient_idclient($data['client_idclient'])
                ->setLocation_processing_idlocation_processing($data['location_processing_idlocation_processing'])
                ->setFirm_type($data['firm_type'])     
       ;
       return $lieu;
    }
    
    public function delete(LieuCollecte $lieucollecte){
        $this->db->delete('adresses_collectes', ['id_collection_address' => $lieucollecte->getId_collection_address()]);
    }
    
    public function find($id)
    {
        $dbLieuCollecte = $this->db->fetchAssoc(
            'SELECT * FROM adresses_collectes WHERE id_collection_address = :id_collection_address',
            [
                ':id_collection_address' => $id
            ]
        );
        
        if (!empty($dbLieuCollecte)) {
            return $this->buildEntity($dbLieuCollecte);
        }
    }
    
    public function findAllByLocationId($locationId) 
    {
        $query = <<<SQL
SELECT * FROM adresses_collectes ac 
JOIN processing_location pl ON ac.location_processing_idlocation_processing = pl.id_location_processing 
WHERE pl.id_location_processing = :location
SQL;

                
        $dbLieux = $this->db->fetchAll($query, [':location' => $locationId]);
        $Lieux =[];
        
        foreach ($dbLieux as $dbLieu){
            $Lieux[] = $this->buildEntity($dbLieu);
        }
        return $Lieux;
    }
    
    public function findNameByCollectionDate($id, \DateTime $date) {
        $day = [
            1 => 'lundi',
            2 => 'mardi',
            3 => 'mercredi',
            4 => 'jeudi',
            5 => 'vendredi',
            6 => 'samedi',
            7 => 'dimanche',

        ];
                
        $dbAdresses = $this->db->fetchAll(
            'SELECT distinct a.*  FROM adresses_collectes a '
            . ' JOIN processing_location b ON a.location_processing_idlocation_processing = b.id_location_processing'
            . ' JOIN collector_has_processing_location c ON c.id_collector_has_processing_location = b.id_location_processing'
            . ' WHERE a.collection_day = :date AND c.collector_idcollector = :id ', 
            [
                ':id' => $id,
                ':date' => $day[$date->format('N')]
            ]
        );
        $adresses =[];

        foreach ($dbAdresses as $dbAdresse){
            $adresses[] = $this->buildEntity($dbAdresse);
        }

        return $adresses;
    }
    
    public function findAll() {
        $dbLieucollectes = $this->db->fetchAll('SELECT ac.*, c.firstname AS clientFirstname, c.lastname AS clientLastname FROM adresses_collectes ac JOIN client c ON ac.client_idclient = c.id_client ORDER BY address_name DESC');
        $collectes =[];
        
        foreach ($dbLieucollectes as $dbLieucollecte){
            $collectes[] = $this->buildEntityFind($dbLieucollecte);
            
        }
        return $collectes;
        
    }
    
    private function buildEntityFind(array $data){
        $lieu = new LieuCollecte();

        $lieu
                ->setId_collection_address($data['id_collection_address'])
                ->setAddress_name($data['address_name'])
                ->setAddress_collection($data['address_collection'])
                ->setPostal_code($data['postal_code'])
                ->setCity($data['city'])
                ->setFurther_information($data['further_information'])
                ->setCountry($data['country'])
                ->setCollection_day($data['collection_day'])
                ->setClient_idclient($data['client_idclient'])
                ->setLocation_processing_idlocation_processing($data['location_processing_idlocation_processing'])
                ->setFirm_type($data['firm_type'])
                ->setClientLastname($data['clientLastname'])
                ->setClientFirstname($data['clientFirstname'])      
       ;
       return $lieu;
    }
}
