<?php

namespace Repository;

use Entity\OutputCompost;

/**
 * Description of OutputCompostRepository
 *
 * @author ghmor
 */
class OutputCompostRepository extends RepositoryAbstract{
    public function totalOutputByCollector($id){
        return $this->db->fetchColumn(
                'SELECT SUM(quantity_exit) FROM output_compost '
                . ' WHERE collector_idcollector = :id', [':id' => $id]);
    }
    public function weekOutputByCollector($id, $date){
              
        return $this->db->fetchColumn(
                'SELECT SUM(quantity_exit) FROM output_compost '
                . ' WHERE collector_idcollector = :id AND output_datetime BETWEEN :date AND now()', 
                [
                    ':id' => $id,
                    ':date' => date('Y-m-d', strtotime('last monday')),
                  //date('Y-m-d', strtotime('-1 week')) 
                 //   'date2' => date('Y-m-d')
                ]);
    }
    public function save(OutputCompost $output){
        $data = [
//            'output_datetime' => $output->getOutput_datetime(),
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
//                ->setOutput_datetime($data['output_datetime'])
                ->setQuantity_exit($data['quantity_exit'])
                ->setLocation_processing_idlocation_processing($data['location_processing_idlocation_processing'])
                ->setCollector_idcollector($data['collector_idcollector']);
        
        return $output;
    }
    
    public function delete(OutputCompost $output){
        $this->db->delete('output_compost', ['idoutput_compost' => $client->getIdoutput_compost()]);
    }
    
    public function find($idoutput_compost)
    {
        $dbOutput = $this->db->fetchAssoc(
            'SELECT * FROM output_compost WHERE idoutput_compost = :idoutput_compost',
            [
                ':idoutput_compost' => $idoutput_compost
            ]
        );
        
        if (!empty($dbOutput)) {
            return $this->buildEntity($dbOutput);
        }
    }
    
    public function findTotalCompostWeight() {
       $query = <<<SQL
SELECT SUM(oc.quantity_exit)
FROM output_compost oc
WHERE  output_datetime >= '20170001'
SQL;

       return $this->db->fetchColumn($query);

   }
   
   public function findTotalCompostWeightByWeek() {
       $query = <<<SQL
SELECT SUM(oc.quantity_exit)
FROM output_compost oc
WHERE  output_datetime BETWEEN :date AND now()
SQL;

       return $this->db->fetchColumn($query,[
                    ':date' => date('Y-m-d', strtotime('-1 week')),
                ]);

   }
}
