<?php

namespace Repository;

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
        
        if ($collector->getId()) {
            $this->db->update('collector', $data,
                [
                    'id' => $collector->getId()
                ]);
        } else {
            $this->db->insert('collector', $data);
            $collector->setId($this->db->lastInsertId());
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
            ->setIdCollector($data['id_client'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setPhoneNumber($data['phone_number'])
            ->setEmail($data['email'])
            ->setPassword($data['password'])
            ->setAddress($data['address'])                
            ->setPostalCode($data['postal_code'])
            ->setCity($data['city'])
            ->setStatus($data['status']);

        
        return $collector;
    }        
}
