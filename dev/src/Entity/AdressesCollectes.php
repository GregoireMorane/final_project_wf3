<?php
/**
 * Description of AdressesCollectes
 *
 * @author ghmor
 */
namespace Entity;
class AdressesCollectes {
    
    /**
     *
     * @var int
     */
    private $id_collection_address;
    /**
     *
     * @var string
     */
    private $adress_collection;
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
    
    //GETTERS
    function getIdCollectionAddress() {
        return $this->id_collection_address;
    }
    function getAdressCollection() {
        return $this->adress_collection;
    }
    function getPostalCode() {
        return $this->postal_code;
    }
    function getCity() {
        return $this->city;
    }
    function getFurtherInformation() {
        return $this->further_information;
    }
    function getCountry() {
        return $this->country;
    }
    function getCollectionDay() {
        return $this->collection_day;
    }
    function getClientIdclient() {
        return $this->client_idclient;
    }
    function getLocationProcessingIdlocationProcessing() {
        return $this->location_processing_idlocation_processing;
    }
    function getFirmType() {
        return $this->firm_type;
    }
    function setIdCollectionAddress($id_collection_address) {
        $this->id_collection_address = $id_collection_address;
    }
    function setAdressCollection($adress_collection) {
        $this->adress_collection = $adress_collection;
    }
    function setPostalCode($postal_code) {
        $this->postal_code = $postal_code;
    }
    function setCity($city) {
        $this->city = $city;
    }
    function setFurtherInformation($further_information) {
        $this->further_information = $further_information;
    }
    function setCountry($country) {
        $this->country = $country;
    }
    function setCollectionDay($collection_day) {
        $this->collection_day = $collection_day;
    }
    function setClientIdclient($client_idclient) {
        $this->client_idclient = $client_idclient;
    }
    function setLocationProcessingIdlocationProcessing($location_processing_idlocation_processing) {
        $this->location_processing_idlocation_processing = $location_processing_idlocation_processing;
    }
    function setFirmType($firm_type) {
        $this->firm_type = $firm_type;
    }


}
