<?php

namespace Entity;

/**
 * Description of OutputCompost
 *
 * @author ghmor
 */
class OutputCompost {
    /**
     *
     * @var int
     */
    private $idoutput_compost;
    /**
     *
     * @var string
     */
    private $output_datetime;
    /**
     *
     * @var int
     */
    private $quantity_exit;
    /**
     *
     * @var int
     */
    private $location_processing_idlocation_processing;
    /**
     *
     * @var int
     */
    private $collector_idcollector;
    
    //GETTERS
    function getIdoutputCompost() {
        return $this->idoutput_compost;
    }
    function getOutputDatetime() {
        return $this->output_datetime;
    }
    function getQuantityExit() {
        return $this->quantity_exit;
    }
    function getLocationProcessingIdlocationProcessing() {
        return $this->location_processing_idlocation_processing;
    }
    function getCollectorIdcollector() {
        return $this->collector_idcollector;
    }
    
    //SETTERS
    function setIdoutputCompost($idoutput_compost) {
        $this->idoutput_compost = $idoutput_compost;
    }
    function setOutputDatetime($output_datetime) {
        $this->output_datetime = $output_datetime;
    }
    function setQuantityExit($quantity_exit) {
        $this->quantity_exit = $quantity_exit;
    }
    function setLocationProcessingIdlocationProcessing($location_processing_idlocation_processing) {
        $this->location_processing_idlocation_processing = $location_processing_idlocation_processing;
    }
    function setCollectorIdcollector($collector_idcollector) {
        $this->collector_idcollector = $collector_idcollector;
    }


}
