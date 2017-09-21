<?php

namespace Entity;

/**
 * Description of TraitementCollector
 *
 * @author ghmor
 */
class TraitementCollector {
    
    /**
     *
     * @var int
     */
    private $id_collector_has_processing_location;
    /**
     *
     * @var int
     */
    private $collector_idcollector;
    /**
     *
     * @var int
     */
    private $processing_location_id_location_processing;
    
    /**
     *
     * @var string
     */
    private $traitement_nom;
    
    /**
     *
     * @var string
     */
    private $collector_lastname;
    
    /**
     *
     * @var string
     */
    private $collector_firstname;
    
    public function getTraitement_nom() {
        return $this->traitement_nom;
    }

    public function getCollector_lastname() {
        return $this->collector_lastname;
    }

    public function getCollector_firstname() {
        return $this->collector_firstname;
    }

    public function setTraitement_nom($traitement_nom) {
        $this->traitement_nom = $traitement_nom;
        return $this;
    }

    public function setCollector_lastname($collector_lastname) {
        $this->collector_lastname = $collector_lastname;
        return $this;
    }

    public function setCollector_firstname($collector_firstname) {
        $this->collector_firstname = $collector_firstname;
        return $this;
    }

        
    public function getCollector_idcollector() {
        return $this->collector_idcollector;
    }

    public function getProcessing_location_id_location_processing() {
        return $this->processing_location_id_location_processing;
    }

    public function setCollector_idcollector($collector_idcollector) {
        $this->collector_idcollector = $collector_idcollector;
        return $this;
    }

    public function setProcessing_location_id_location_processing($processing_location_id_location_processing) {
        $this->processing_location_id_location_processing = $processing_location_id_location_processing;
        return $this;
    }
    public function getId_collector_has_processing_location() {
        return $this->id_collector_has_processing_location;
    }

    public function setId_collector_has_processing_location($id_collector_has_processing_location) {
        $this->id_collector_has_processing_location = $id_collector_has_processing_location;
        return $this;
    }



}
