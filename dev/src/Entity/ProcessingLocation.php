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
    
    //GETTERS
    function getIdLocationProcessing() {
        return $this->id_location_processing;
    }
    function getProcessingAddress() {
        return $this->processing_address;
    }
    function getPostalCode() {
        return $this->postal_code;
    }
    function getCity() {
        return $this->city;
    }
    function getCountry() {
        return $this->country;
    }
    function getProcessingLocation() {
        return $this->processing_location;
    }
    
    //SETTERS
    function setId_locationProcessing($id_location_processing) {
        $this->id_location_processing = $id_location_processing;
    }
    function setProcessingAddress($processing_address) {
        $this->processing_address = $processing_address;
    }
    function setPostalCode($postal_code) {
        $this->postal_code = $postal_code;
    }
    function setCity($city) {
        $this->city = $city;
    }
    function setCountry($country) {
        $this->country = $country;
    }
    function setProcessingLocation($processing_location) {
        $this->processing_location = $processing_location;
    }

}
