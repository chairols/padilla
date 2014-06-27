<?php

class Ots_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        ots
                                    ORDER BY
                                        numero_ot");
        return $query->result_array();
    }
}
?>