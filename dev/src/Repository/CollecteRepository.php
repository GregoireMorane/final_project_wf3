<?php

namespace Repository;

use Entity\AdressesCollectionsHaveCollector;

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
        var_dump($dbCollecte);
        if (!empty($dbCollecte)) {
            return $this->buildEntity($dbCollecte);
        }
    }
    
    public function findByCollectionAddress($id) {
        $dbCollection = $this->db->fetchAssoc(
            'SELECT * FROM adresses_collections_have_collector WHERE adress_collection_idadress_collection = :id',
            [
                ':id' => $id
            ]
        );
        
        return $this->buildEntity($dbCollection);

    }
}
