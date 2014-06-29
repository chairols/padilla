<?php

class Monedas_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('monedas', $datos);
        return $this->db->insert_id();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        monedas
                                    WHERE
                                        activo = '1'");
        return $query->result_array();  
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('monedas', $where);
        
        return $query->row_array();
    }
}

?>