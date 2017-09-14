<?php
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