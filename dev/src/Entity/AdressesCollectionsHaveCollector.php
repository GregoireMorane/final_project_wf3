<?php

namespace Entity;

/**
 * Description of AdressesCollectionsHaveCollector
 *
 * @author ghmor
 */
class AdressesCollectionsHaveCollector {
    /**
     *
     * @var int
     */
    private $id_adresses_collections_have_collector;
    /**
     *
     * @var int
     */
    private $adress_collection_idadress_collection;
    /**
     *
     * @var int
     */
    private $collector_idcollector;
    /**
     *
     * @var string
     */
    private $collection_datetime;
    /**
     *
     * @var int
     */
    private $bin_number;
    /**
     *
     * @var string
     */
    private $processing_datetime;
    /**
     *
     * @var int
     */
    private $weight;
    /**
     *
     * @var string
     */
    private $compost_quality;
    /**
     *
     * @var string
     */
    private $further_information;
    /**
     *
     * @var string
     */
    private $processing_location;
    /**
     *
     * @var string
     */
    private $location_processing;
    
    /**
     *
     * @var string
     */
    private $collector;
    
    /**
     *
     * @var string
     */
    private $lieu;
    
    public function getAdress_collection_idadress_collection() {
        return $this->adress_collection_idadress_collection;
    }

    public function getCollector_idcollector() {
        return $this->collector_idcollector;
    }

    public function getCollection_datetime() {
        return $this->collection_datetime;
    }

    public function getBin_number() {
        return $this->bin_number;
    }

    public function getProcessing_datetime() {
        return $this->processing_datetime;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getCompost_quality() {
        return $this->compost_quality;
    }

   
    public function getFurther_information() {
        return $this->further_information;
    }

    public function getId_adresses_collections_have_collector() {
        return $this->id_adresses_collections_have_collector;
    }

    public function getProcessing_location() {
        return $this->processing_location;
    }

    
    
    
    public function setAdress_collection_idadress_collection($adress_collection_idadress_collection) {
        $this->adress_collection_idadress_collection = $adress_collection_idadress_collection;
        return $this;
    }

    public function setCollector_idcollector($collector_idcollector) {
        $this->collector_idcollector = $collector_idcollector;
        return $this;
    }

    public function setCollection_datetime($collection_datetime) {
        $this->collection_datetime = $collection_datetime;
        return $this;
    }

    public function setBin_number($bin_number) {
        $this->bin_number = $bin_number;
        return $this;
    }

    public function setProcessing_datetime($processing_datetime) {
        $this->processing_datetime = $processing_datetime;
        return $this;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    public function setCompost_quality($compost_quality) {
        $this->compost_quality = $compost_quality;
        return $this;
    }

    public function setFurther_information($further_information) {
        $this->further_information = $further_information;
        return $this;
    }


    public function setProcessing_location($processing_location) {
        $this->processing_location = $processing_location;
        return $this;
    }
   

    public function setId_adresses_collections_have_collector($id_adresses_collections_have_collector) {
        $this->id_adresses_collections_have_collector = $id_adresses_collections_have_collector;
        return $this;
    }

    public function getCollector() {
        return $this->collector;
    }

    public function setCollector($collector) {
        $this->collector = $collector;
        return $this;
    }    
    
    function getLieu() {
        return $this->lieu;
    }

    function setLieu($lieu) {
        $this->lieu = $lieu;
        return $this;
    }
    
    function getLocation_processing() {
        return $this->location_processing;        
    }
    
    function setLocation_processing($location_processing) {
    $this->location_processing = $location_processing;
    return $this;
    }

}
