<?php

namespace Entity;

/**
 * Description of ProcessingLocation
 *
 * @author ghmor
 */
class ProcessingLocation {
    
    /**
     *
     * @var int
     */
    private $id_location_processing;
    /**
     *
     * @var string
     */
    private $processing_address;
    /**
     *
     * @var string
     */
    private $postal_code;
    /**
     *
     * @var string
     */
    private $city;
    /**
     *
     * @var string
     */
    private $country;
    /**
     *
     * @var string
     */
    private $processing_location;
    
    private $collectors = [];
    //possiblement utile pour la page admin et le menu
    private $clients = [];
    
    private $lieux =[];
    
   


    //getter
    public function getId_location_processing() {
        return $this->id_location_processing;
    }

    public function getProcessing_address() {
        return $this->processing_address;
    }

    public function getPostal_code() {
        return $this->postal_code;
    }

    public function getCity() {
        return $this->city;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getProcessing_location() {
        return $this->processing_location;
    }
    

    
    //setter
    public function setId_location_processing($id_location_processing) {
        $this->id_location_processing = $id_location_processing;
        return $this;
    }

    public function setProcessing_address($processing_address) {
        $this->processing_address = $processing_address;
        return $this;
    }

    public function setPostal_code($postal_code) {
        $this->postal_code = $postal_code;
        return $this;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    public function setProcessing_location($processing_location) {
        $this->processing_location = $processing_location;
        return $this;
    }
   
    public function getCollectors() {
        return $this->collectors;
    }

    public function setCollectors(array $collectors) {
        $this->collectors = $collectors;
        return $this;
    }
    //possiblement utile pour la page admin et le menu
    public function getClients() {
        return $this->clients;
    }

    public function setClients(array $clients) {
        $this->clients = $clients;
        return $this;
    }

    public function getLieux() {
        return $this->lieux;
    }

    public function setLieux(array $lieux) {
        $this->lieux = $lieux;
        return $this;
    }






}
