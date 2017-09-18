<?php

namespace Repository;

use Entity\OutputCompost;

/**
 * Description of OutputCompostRepository
 *
 * @author ghmor
 */
class OutputCompostRepository extends RepositoryAbstract{
    public function save(OutputCompost $output){
        $data = [
            'output_datetime' => $output->getOutput_datetime(),
            'quantity_exit' => $output->getQuantity_exit(),
            'location_processing_idlocation_processing' => $output->getLocation_processing_idlocation_processing(),
            'collector_idcollector' => $output->getCollector_idcollector()
        ];
        
        if($output->getIdoutput_compost()){
            $this->db->update('output_compost', $data,
                    [
                       'idoutput_compost' => $output->getIdoutput_compost() 
                    ]);
        }
        else{
            $this->db->insert('output_compost', $data);
            $output->setIdoutput_compost($this->db->lastInsertId());
        }
    }
    
    private function buildEntity(array $data){
        $output = new OutputCompost();
        
        $output
                ->setIdoutput_compost($data['idoutput_compost'])
                ->setOutput_datetime($data['output_datetime'])
                ->setQuantity_exit($data['quantity_exit'])
                ->setLocation_processing_idlocation_processing($data['location_processing_idlocation_processing'])
                ->setCollector_idcollector($data['collector_idcollector']);
        
        return $output;
    }
}
