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
    private $transformation_place;
    
    //GETTERS
    function getAdressCollectionIdadressCollection() {
        return $this->adress_collection_idadress_collection;
    }
    function getCollectorIdcollector() {
        return $this->collector_idcollector;
    }
    function getCollectionDatetime() {
        return $this->collection_datetime;
    }
    function getBinNumber() {
        return $this->bin_number;
    }
    function getProcessingDatetime() {
        return $this->processing_datetime;
    }
    function getWeight() {
        return $this->weight;
    }
    function getCompostQuality() {
        return $this->compost_quality;
    }
    function getFurtherInformation() {
        return $this->further_information;
    }
    function getTransformationPlace() {
        return $this->transformation_place;
    }
    //SETTERS
    function setAdressCollectionIdadressCollection($adress_collection_idadress_collection) {
        $this->adress_collection_idadress_collection = $adress_collection_idadress_collection;
    }
    function setCollectorIdcollector($collector_idcollector) {
        $this->collector_idcollector = $collector_idcollector;
    }
    function setCollectionDatetime($collection_datetime) {
        $this->collection_datetime = $collection_datetime;
    }
    function setBinNumber($bin_number) {
        $this->bin_number = $bin_number;
    }
    function setProcessingDatetime($processing_datetime) {
        $this->processing_datetime = $processing_datetime;
    }
    function setWeight($weight) {
        $this->weight = $weight;
    }
    function setCompostQuality($compost_quality) {
        $this->compost_quality = $compost_quality;
    }
    function setFurtherInformation($further_information) {
        $this->further_information = $further_information;
    }
    function setTransformationPlace($transformation_place) {
        $this->transformation_place = $transformation_place;
    }


}
