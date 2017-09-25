<?php

namespace Repository;

use Entity\AdressesCollectionsHaveCollector;
use Entity\Collector;
use Entity\LieuCollecte;
use Entity\ProcessingLocation;

/**
 * Description of CollecteRepository
 *
 * @author ghmor
 */
class CollecteRepository extends RepositoryAbstract{

    public function totalWasteByCollector($id){
        return $this->db->fetchColumn(
                'SELECT SUM(weight) FROM adresses_collections_have_collector '
                . ' WHERE collector_idcollector = :id', [':id' => $id]);
    }
    
    public function weekWasteByCollector($id, $date){
              
        return $this->db->fetchColumn(
                'SELECT SUM(weight) FROM adresses_collections_have_collector '
                . ' WHERE collector_idcollector = :id AND collection_datetime BETWEEN :date AND now()', 
                [
                    ':id' => $id,
                    ':date' => date('Y-m-d', strtotime('last monday'))
                  //date('Y-m-d', strtotime('-1 week')) 
                 //   'date2' => date('Y-m-d')
                ]);
    }

    public function save(AdressesCollectionsHaveCollector $collecte){
        $data =[
            'adress_collection_idadress_collection' => $collecte->getAdress_collection_idadress_collection(),
            'collector_idcollector' => $collecte->getCollector_idcollector(),
            //'collection_datetime' => $collecte->getCollection_datetime(),
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

    public function findCurrentWeekBioWasteWeightByClientId($id, $date) {
        $query = <<<SQL
SELECT SUM(achc.weight)
FROM adresses_collections_have_collector achc
JOIN adresses_collectes ac ON ac.id_collection_address = achc.adress_collection_idadress_collection
JOIN client ON client.id_client = ac.client_idclient
WHERE client.id_client = :id 
AND achc.collection_datetime BETWEEN :date AND now()
SQL;
    
        return $this->db->fetchColumn($query, [
            ':id' => $id,
            ':date' => date('Y-m-d', strtotime('last monday'))
        ]);
    }

    public function findTotalBioWasteWeightByClientId($id) {
        $query = <<<SQL
SELECT SUM(achc.weight)
FROM adresses_collections_have_collector achc
JOIN adresses_collectes ac ON ac.id_collection_address = achc.adress_collection_idadress_collection
JOIN client ON client.id_client = ac.client_idclient
WHERE client.id_client = :id
SQL;

        return $this->db->fetchColumn($query, [':id' => $id]);
    }

    public function findTotalBioWasteWeight() {
       $query = <<<SQL
SELECT SUM(achc.weight)
FROM adresses_collections_have_collector achc
WHERE  collection_datetime >= '20170001'
SQL;

       return $this->db->fetchColumn($query);

   }
   
   public function findTotalBioWasteWeightByWeek() {
       $query = <<<SQL
SELECT SUM(achc.weight)
FROM adresses_collections_have_collector achc
WHERE  collection_datetime BETWEEN :date AND now()
SQL;

       return $this->db->fetchColumn($query,[
                    ':date' => date('Y-m-d', strtotime('-1 week')),
                ]);

   }
    
    public function findCollectionDateByClientId($id) {
        $query = <<<SQL
SELECT achc.*
FROM adresses_collections_have_collector achc
JOIN adresses_collectes ac ON ac.id_collection_address = achc.adress_collection_idadress_collection
JOIN client ON client.id_client = ac.client_idclient
WHERE client.id_client = :id
ORDER BY collection_datetime DESC
SQL;

        $dbCollectionDates = $this->db->fetchAll($query, [':id' => $id]);
        $collectionDates = [];
        
        foreach ($dbCollectionDates as $dbCollectionDate) {
            $collectionDates[] = $this->buildEntity($dbCollectionDate);
        }
        
        return $collectionDates;
    }
    
    public function findOneDacDetails($id, $id_dac) {
        
        $query = <<<SQL
SELECT achc.*, ac.*, collector.*, pl.*
FROM adresses_collectes ac
LEFT JOIN processing_location pl ON pl.id_location_processing = ac.location_processing_idlocation_processing
LEFT JOIN adresses_collections_have_collector achc ON achc.adress_collection_idadress_collection = ac.id_collection_address
LEFT JOIN collector ON collector.idcollector = achc.collector_idcollector
WHERE client_idclient = :id
AND achc.id_adresses_collections_have_collector = :id_dac
SQL;

        $dbOneDacDetails = $this->db->fetchAll($query, 
                [
                    ':id' => $id,
                    ':id_dac' => $id_dac
                ]);
        
        $oneDacDetails=[];
        
        foreach ($dbOneDacDetails as $dbOneDacDetail){
            $oneDacDetails[] = $this->buildEntity2($dbOneDacDetail);

        }

        return $oneDacDetails;
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
                ->setProcessing_location($data['processing_location']);
        return $collecte;
    }
    
    public function delete(AdressesCollectionsHaveCollector $collecte){
        $this->db->delete('adresses_collections_have_collector', ['id_adresses_collections_have_collector' => $collecte->getId_adresses_collections_have_collector()]);
    }
    
    public function find($id)
    { 
        $dbCollecte = $this->db->fetchAssoc(
            //'SELECT a.*, b.address_name as name FROM adresses_collections_have_collector a'  
                'SELECT a.*, b.address_name, b.id_collection_address FROM adresses_collections_have_collector a'  
            . ' JOIN adresses_collectes b ON a.adress_collection_idadress_collection = b.id_collection_address'
            . ' WHERE a.id_adresses_collections_have_collector = :id',
            [
                ':id' => $id
            ]
        );
//        $collecte = [];
//        foreach ($dbCollecte as $dbCollecte) {
//            $collecte[] = $this->buildEntity($dbCollecte);
//        }
          return $this->buildEntitySimone($dbCollecte);
    }
    
    private function buildEntity2(array $data){
        $location_processing = new ProcessingLocation();
        
        $location_processing
                ->setId_location_processing($data['id_location_processing'])
                ->setProcessing_location($data['processing_location'])
                ->setProcessing_address($data['processing_address'])
                ->setPostal_code($data['postal_code'])
                ->setCity($data['city'])
                ->setCountry($data['country']);
        
        $collector = new Collector();
        
        $collector
                ->setIdcollector($data['idcollector'])
                ->setLastname($data['lastname'])
                ->setFirstname($data['firstname'])
                ->setPhone_number($data['phone_number'])
                ->setEmail($data['email'])
                ->setPassword($data['password'])
                ->setAddress($data['address'])                
                ->setPostal_code($data['postal_code'])
                ->setCity($data['city'])
                ->setStatus($data['status']);

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
                ->setFirm_type($data['firm_type']);
        
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
                ->setProcessing_location($data['processing_location'])
                ->setLocation_Processing($location_processing)
                ->setCollector($collector)                      
                ->setLieu($lieu);          
        return $collecte;
    }
    
    public function findByCollectionAddress($id) {
        $dbCollection = $this->db->fetchAssoc(
            'SELECT * FROM adresses_collections_have_collector WHERE adress_collection_idadress_collection = :id',
            //'SELECT a.*, b.address_name as name FROM adresses_collections_have_collector a'  
                'SELECT a.*, b.address_name, b.id_collection_address FROM adresses_collections_have_collector a'  
            . ' JOIN adresses_collectes b ON a.adress_collection_idadress_collection = b.id_collection_address'
            . ' WHERE a.id_adresses_collections_have_collector = :id',
            [
                ':id' => $id
            ]
        );

//        $collecte = [];
//        foreach ($dbCollecte as $dbCollecte) {
//            $collecte[] = $this->buildEntity($dbCollecte);
//        }
        
          return $this->buildEntity($dbCollecte);
    }
    
//    public function findByCollectionAddress($id) {
//        $dbCollection = $this->db->fetchAssoc(
//            'SELECT * FROM adresses_collections_have_collector WHERE adress_collection_idadress_collection = :id',
//            [
//                ':id' => $id
//            ]
//        );
//        
//        return $this->buildEntity($dbCollection);
//    }
    
    public function findBinByEmptyWeight($id) {
        $dbBins = $this->db->fetchAll(
            'SELECT bin_number, id_adresses_collections_have_collector FROM adresses_collections_have_collector'
            . ' WHERE weight = 0 AND collector_idcollector = :id', 
            [
                ':id' => $id
            ]
        );

        return $dbBins;
//        return $this->buildEntity($dbBins);
    }
    
    private function buildEntitySimone(array $data) {
        $collectionAddress = new LieuCollecte();
        
        $collectionAddress 
                ->setAddress_name($data['address_name'])
                ->setId_Collection_Address($data['id_collection_address']);
  
        $collecte = new AdressesCollectionsHaveCollector();
        
        $collecte
                ->setId_adresses_collections_have_collector($data['id_adresses_collections_have_collector'])
                ->setAdress_collection_idadress_collection($data['adress_collection_idadress_collection'])
                ->setCollector_idcollector($data['collector_idcollector'])
                //->setCollection_datetime($data['collection_datetime'])
                ->setBin_number($data['bin_number'])
                ->setProcessing_datetime($data['processing_datetime'])
                ->setWeight($data['weight'])
                ->setCompost_quality($data['compost_quality'])
                ->setFurther_information($data['further_information'])
                ->setLieuCollecte($collectionAddress)
                ->setProcessing_location($data['processing_location']);
        return $collecte;
    }
}
