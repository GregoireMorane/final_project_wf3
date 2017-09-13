<?php

namespace Repository;

class ClientRepository extends RepositoryAbstract{
    public function findByEmail($email) {
        $dbClient = $this->db->fetchAssoc(
            'SELECT * FROM client WHERE email = :email',
            [
                ':email' => $email
            ]
        );
        
        if(!empty($dbClient)){
            return $this->buildEntity($dbClient);
        }
    }
    
    public function save(Client $client) {
        $data = [
            'start_date_contract' => $client->getDateStartContract(),
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
        
        if ($client->getId()) {
            $this->db->update('client', $data,
                [
                    'id' => $client->getId()
                ]);
        } else {
            $this->db->insert('client', $data);
            $client->setId($this->db->lastInsertId());
        }
    }
    
    /**
     * 
     * @param array $data
     * @return User
     */
    private function buildEntity(array $data) {
        $client = new Client();
        
        $client
            ->setIdClient($data['id_client'])
            ->setDateStartContract($data['start_date_contract'])
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
