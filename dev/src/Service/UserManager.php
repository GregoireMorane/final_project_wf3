<?php

namespace Service;

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
    
    public function loginUser($user){
        $this->session->set('user', $user);
    }
    
    public function logout(){
        $this->session->remove('user');
//        $this->session->remove('collector');
//        $this->session->remove('admin');
    }
    
    public function getUser(){
        return $this->session->get('user');
    }
    
    public function getFirstname(){
        if($this->session->has('user')){
            return $this->getUser()->getFirstname();
        }
        return '';
    }
}
