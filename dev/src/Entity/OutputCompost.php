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
    
    public function getIdoutput_compost() {
        return $this->idoutput_compost;
    }

    public function getOutput_datetime() {
        return $this->output_datetime;
    }

    public function getQuantity_exit() {
        return $this->quantity_exit;
    }

    public function getLocation_processing_idlocation_processing() {
        return $this->location_processing_idlocation_processing;
    }

    public function getCollector_idcollector() {
        return $this->collector_idcollector;
    }

    public function setIdoutput_compost($idoutput_compost) {
        $this->idoutput_compost = $idoutput_compost;
        return $this;
    }

    public function setOutput_datetime($output_datetime) {
        $this->output_datetime = $output_datetime;
        return $this;
    }

    public function setQuantity_exit($quantity_exit) {
        $this->quantity_exit = $quantity_exit;
        return $this;
    }

    public function setLocation_processing_idlocation_processing($location_processing_idlocation_processing) {
        $this->location_processing_idlocation_processing = $location_processing_idlocation_processing;
        return $this;
    }

    public function setCollector_idcollector($collector_idcollector) {
        $this->collector_idcollector = $collector_idcollector;
        return $this;
    }




}
