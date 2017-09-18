<?php
<<<<<<< HEAD
class UserManager{
    
    /**
     *
     * @var Session
     */
    private $session;
   
    function __construct(Session $session) {
        $this->session = $session;
    }

}
=======

namespace Service;

use Entity\Client;
use Entity\Collector;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Description of UserManager
 *
 * @author ghmor
 */
class UserManager {
    private $session;
    
    public function __construct(Session $session) {
        $this->session = $session;
    }
    
    public function encodePassword($plainPassword){
        return password_hash($plainPassword, PASSWORD_BCRYPT);
    }
    
//    public function verifyPassword($plainPassword, $encodedPassword){
//        return password_verify($plainPassword, $encodedPassword);
//    }
    
    public function verifyPassword($plainPassword, $toto){
        return $plainPassword == $toto;
    }
    
    public function loginClient(Client $client){
        $this->session->set('client', $client);
    }
    public function loginCollector(Collector $collector){
        $this->session->set('collector', $collector);
    }
    public function loginAdmin(Collector $admin){
        $this->session->set('admin', $admin);
    }
    
    public function logout(){
        $this->session->remove('client');
        $this->session->remove('collector');
        $this->session->remove('admin');
    }
    
    public function getClient(){
        return $this->session->get('client');
    }
    public function getCollector(){
        return $this->session->get('collector');
    }
    public function getAdmin(){
        return $this->session->get('admin');
    }
    
    public function getClientName(){
        if($this->session->has('client')){
            return $this->getClient()->getFullName();
        }
        return '';
    }
    public function getCollectorName(){
        if($this->session->has('collector')){
            return $this->getCollector()->getFullName();
        }
        return '';
    }
    public function getAdminName(){
        if($this->session->has('admin')){
            return $this->getCollector()->getFullName();
        }
        return '';
    }
}
>>>>>>> origin/gregoire
