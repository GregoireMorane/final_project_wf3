<?php

namespace Repository;
use Entity\Client;

class ClientRepository extends RepositoryAbstract{
    public function findByEmail($email) {
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM client WHERE email = :email',
            [
                ':email' => $email
            ]
        );
        
        if(!empty($dbUser)){
            return $this->buildEntity($dbUser);
        }
    }
    /**
     * 
     * @param \Repository\Client $client
     */
    public function save(Client $client) {
        $data = [
            'start_date_contract' => $client->getStartDateContract(),
            'lastname' => $client->getLastname(),
            'firstname' => $client->getFirstname(),
            'phone_number' => $client->getPhoneNumber(),
            'email' => $client->getEmail(),
            'password' => $client->getPassword(),
            'billing_address' => $client->getBillingAddress(),
            'postal_code' => $client->getPostalCode(),
            'city' => $client->getCity(),
            'country' => $client->getCountry(),
            'company' => $client->getCompany(),
            'siret' => $client->getSiret(),
            'is_active' => $client->getIsActive()
        ];
        
        if ($client->getIdClient()) {
            $this->db->update('client', $data,
                [
                    'id_client' => $client->getIdClient()
                ]);
        } else {
            $this->db->insert('client', $data);
            $client->setIdClient($this->db->lastInsertId());
        }
    }
    
    public function findAll() 
    {
        $dbClients = $this->db->fetchAll('SELECT * FROM client ORDER BY lastname');
        $clients =[];
        
        foreach ($dbClients as $dbClient){
            $clients[] = $this->buildEntity($dbClient);
        }
        return $clients;
    }
    
    public function findAllByLocationId($location) 
    {
        $query = <<<SQL
SELECT c.* FROM CLIENT c JOIN adresses_collectes ac ON c.id_client = ac.client_idclient 
JOIN adresses_collections_have_collector achc ON ac.id_collection_address = achc.adress_collection_idadress_collection 
JOIN collector col ON achc.collector_idcollector = col.idcollector 
JOIN collector_has_processing_location chpl ON col.idcollector = chpl.id_collector_has_processing_location 
JOIN processing_location pl ON chpl.processing_location_id_location_processing = pl.id_location_processing 
WHERE pl.id_location_processing = :id
SQL;

//      première requete     
//SELECT c.* 
//FROM client c 
//JOIN adresses_collectes ac ON c.id_client = ac.client_idclient                 
//JOIN processing_location pl ON ac.location_processing_idlocation_processing = pl.id_location_processing 
//WHERE pl.id_location_processing = :id
     
        //deuxième requète
//        SELECT c.* FROM client c 
//JOIN adresses_collectes ac ON c.id_client = ac.client_idclient 
//JOIN adresses_collections_have_collector achc ON ac.id_collection_address = achc.adress_collection_idadress_collection 
//JOIN collector col ON col.idcollector = achc.collector_idcollector JOIN collector_has_processing_location chpl ON chpl.collector_idcollector = col.idcollector 
//JOIN processing_location pl ON chpl.processing_location_id_location_processing = pl.id_location_processing 
//WHERE achc.collector_idcollector = :id AND pl.id_location_processing = :location
        
        

        
        $dbClients = $this->db->fetchAll($query, [':id' => $location]);
        $clients =[];
        
        foreach ($dbClients as $dbClient){
            $clients[] = $this->buildEntity($dbClient);
        }
        return $clients;
    }
   
    private function buildEntity(array $data) {
            $client = new Client();
        
        $client
            ->setIdClient($data['id_client'])
            ->setStartDateContract($data['start_date_contract'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setPhoneNumber($data['phone_number'])
            ->setEmail($data['email'])
            ->setPassword($data['password'])
            ->setBillingAddress($data['billing_address'])                
            ->setPostalCode($data['postal_code'])
            ->setCity($data['city'])
            ->setCountry($data['country'])
            ->setCompany($data['company'])
            ->setSiret($data['siret'])
            ->setIsActive($data['is_active']);

        
        return $client;
    }
    
    public function delete(Client $client){
        $this->db->delete('client', ['id_client' => $client->getIdClient()]);
    }
    
    public function find($id_client)
    {
        $dbClient = $this->db->fetchAssoc(
            'SELECT * FROM client WHERE id_client = :id_client',
            [
                ':id_client' => $id_client
            ]
        );
        
        if (!empty($dbClient)) {
            return $this->buildEntity($dbClient);
        }
    }
    
}
