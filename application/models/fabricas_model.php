<?php

class Fabricas_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('fabricas', $datos);
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        fabricas
                                    ORDER BY
                                        idfabrica");
        return $query->result_array();
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('fabricas', $where);
        
        return $query->row_array();
    }
}
?>
