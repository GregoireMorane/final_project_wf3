<?php

namespace Repository;
use Entity\Client;

class ClientRepository extends RepositoryAbstract{

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
        $dbClients = $this->db->fetchAll('SELECT * FROM client ORDER BY id_client');
        $clients =[];
        
        foreach ($dbClients as $dbClient){
            $clients[] = $this->buildEntity($dbClient);
        }
        return $clients;
    }
    
    /**
     * 
     * @param array $data
     * @return Client
     */
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
}
