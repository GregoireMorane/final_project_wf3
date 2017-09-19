<?php

namespace Repository;

use Entity\Collector;
use Symfony\Component\Security\Core\User\User;

class CollectorRepository extends RepositoryAbstract{
    public function findByEmail($email) {
        $dbCollector = $this->db->fetchAssoc(
            'SELECT * FROM collector WHERE email = :email',
            [
                ':email' => $email
            ]
        );
        
        if(!empty($dbCollector)){
            return $this->buildEntity($dbCollector);
        }
    }
    
    public function findAll() 
    {
        $dbCollectors = $this->db->fetchAll('SELECT * FROM collector ORDER BY idcollector');
        $collectors =[];
        
        foreach ($dbCollectors as $dbCollector){
            $collectors[] = $this->buildEntity($dbCollector);
        }
        return $collectors;
    }
    
    public function findByClientId($id) {
        $query = <<<SQL
SELECT c.*
FROM collector c
JOIN collector_has_processing_location chpl ON chpl.collector_idcollector = c.idcollector
JOIN processing_location pl ON pl.id_location_processing = chpl.processing_location_id_location_processing
JOIN adresses_collectes ac ON ac.location_processing_idlocation_processing = pl.id_location_processing
JOIN client ON client.id_client = ac.client_idclient
WHERE client.id_client = :id
SQL;
                
        $dbCollectors = $this->db->fetchAll($query, [':id' => $id]);
        $collectors = [];
        
        foreach ($dbCollectors as $dbCollector) {
            $collectors[] = $this->buildEntity($dbCollector);
        }
        
        return $collectors;
    }
    
    public function save(Collector $collector) {
        $data = [
            'lastname' => $collector->getLastname(),
            'firstname' => $collector->getFirstname(),
            'phone_number' => $collector->getPhoneNumber(),
            'email' => $collector->getEmail(),
            'password' => $collector->getPassword(),
            'address' => $collector->getAddress(),
            'postal_code' => $collector->getPostalCode(),
            'city' => $collector->getCity(),
            'status' => $collector->getStatus(),
        ];
        
        if ($collector->getIdcollector()) {
            $this->db->update('collector', $data,
                [
                    'id' => $collector->getId()
                ]);
        } else {
            $this->db->insert('collector', $data);
            $collector->setIdcollector($this->db->lastInsertId());
        }
    }
    
    /**
     * 
     * @param array $data
     * @return User
     */
    private function buildEntity(array $data) {
        $collector = new Collector();
        
        $collector
            ->setIdCollector($data['idcollector'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setPhone_number($data['phone_number'])
            ->setEmail($data['email'])
            ->setPassword($data['password'])
            ->setAddress($data['address'])                
            ->setPostal_code($data['postal_code'])
            ->setCity($data['city'])
            ->setStatus($data['status']);

        
        return $collector;
    }
    
    public function delete(Collector $collector){
        $this->db->delete('collector', ['idcollector' => $collector->getIdcollector()]);
    }
    
    public function find($idcollector)
    {
        $dbCollector = $this->db->fetchAssoc(
            'SELECT * FROM collector WHERE idcollector = :idcollector',
            [
                ':idcollector' => $idcollector
            ]
        );
        
        if (!empty($dbCollector)) {
            return $this->buildEntity($dbCollector);
        }
    }
}
