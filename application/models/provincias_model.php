<?php

class Provincias_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('provincias', $datos);
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        provincias
                                    ORDER BY
                                        provincia");
        return $query->result_array();
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('provincias', $where);
        
        return $query->row_array();
    }
}
?>