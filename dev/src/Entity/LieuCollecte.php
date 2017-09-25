<?php
/**
 * Description of AdressesCollecte
 *
 * @author ghmor
 */
namespace Entity;
class LieuCollecte {
    
    /**
     *
     * @var int
     */
    private $id_collection_address;
    /**
     *
     * @var string 
     */
    private $address_name;
    /**
     *
     * @var string
     */
    private $address_collection;
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
    private $further_information;
    /**
     *
     * @var string
     */
    private $country;
    /**
     *
     * @var string
     */
    private $collection_day;
    /**
     *
     * @var int
     */
    private $client_idclient;
    /**
     *
     * @var int
     */
    private $location_processing_idlocation_processing;
    /**
     *
     * @var string
     */
    private $firm_type;
    
    /**
     *
     * @var sring
     */
    private $collector;
    /**
     *
     * @var string
     */
    private $clientFirstname;
    
    /**
     *
     * @var string 
     */
    private $clientLastname;
    
    public function getClientFirstname() {
        return $this->clientFirstname;
    }

    public function getClientLastname() {
        return $this->clientLastname;
    }

    public function setClientFirstname($clientFirstname) {
        $this->clientFirstname = $clientFirstname;
        return $this;
    }

    public function setClientLastname($clientLastname) {
        $this->clientLastname = $clientLastname;
        return $this;
    }
    
    public function getId_collection_address() {
        return $this->id_collection_address;
    }
    
    public function getAddress_name() {
        return $this->address_name;
    }

    public function getAddress_collection() {
        return $this->address_collection;
    }

    public function getPostal_code() {
        return $this->postal_code;
    }

    public function getCity() {
        return $this->city;
    }

    public function getFurther_information() {
        return $this->further_information;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getCollection_day() {
        return $this->collection_day;
    }

    public function getClient_idclient() {
        return $this->client_idclient;
    }

    public function getLocation_processing_idlocation_processing() {
        return $this->location_processing_idlocation_processing;
    }

    public function getFirm_type() {
        return $this->firm_type;
    }

    public function setId_collection_address($id_collection_address) {
        $this->id_collection_address = $id_collection_address;
        return $this;
    }

    public function setAddress_name($address_name) {
        $this->address_name = $address_name;
        return $this;
    }
    
    public function setAddress_collection($address_collection) {
        $this->address_collection = $address_collection;
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

    public function setFurther_information($further_information) {
        $this->further_information = $further_information;
        return $this;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    public function setCollection_day($collection_day) {
        $this->collection_day = $collection_day;
        return $this;
    }

    public function setClient_idclient($client_idclient) {
        $this->client_idclient = $client_idclient;
        return $this;
    }

    public function setLocation_processing_idlocation_processing($location_processing_idlocation_processing) {
        $this->location_processing_idlocation_processing = $location_processing_idlocation_processing;
        return $this;
    }

    public function setFirm_type($firm_type) {
        $this->firm_type = $firm_type;
        return $this;
    }
    
    public function getCollector() {
        return $this->collector;
    }

    public function setCollector($collector) {
        $this->collector = $collector;
        return $this;
    }    
    
}
