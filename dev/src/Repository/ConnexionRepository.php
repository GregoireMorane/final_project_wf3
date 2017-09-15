<?php

namespace Repository;

use Entity\Client;
use Entity\Collector;

/**
 * Description of ConnexionRepository
 *
 * @author ghmor
 */
class ConnexionRepository extends RepositoryAbstract{
    public function findByEmailClient($email){
        $dbClient = $this->db->fetchAssoc('SELECT * FROM client WHERE email = :email',
                [':email'=>$email]);
    
        if(!empty($dbClient)){
            return $this->buildEntityClient($dbClient);
        }
    }
    
    public function findByEmailCollectorAdmin($email){
        $dbCollector = $this->db->fetchAssoc('SELECT * FROM collector WHERE email = :email',
                [':email'=>$email]);
        if(!empty($dbCollector)){
            return $this->buildEntityCollector($dbCollector);
        }
    }
    
    private function buildEntityClient(array $data){
        $client = new Client();
        
        $client->setIdClient($data['id_client'])
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
                ->setIsActive($data['is_active'])
                ;

        
        return $client;
    }
    
    private function buildEntityCollector(array $data){
        $collector = new Collector();
        
        $collector->setIdcollector($data['idcollector'])
                ->setLastname($data['lastname'])
                ->setFirstname($data['firstname'])
                ->setPhone_number($data['phone_number'])
                ->setEmail($data['email'])
                ->setPassword($data['password'])
                ->setAddress($data['address'])
                ->setPostal_code($data['postal_code'])
                ->setCity($data['city'])
                ->setStatus($data['status'])
                ;

        
        return $collector;
    }
}
