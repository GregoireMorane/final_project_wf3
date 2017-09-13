<?php

namespace Repository;

/**
 * 
 * @var Connection
 */
class RepositoryAbstract {
    protected $db;
    
    public function __construct(Connection $db) {
        $this->db = $db;
    }
}
