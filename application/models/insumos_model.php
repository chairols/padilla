<?php

class Insumos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('insumos', $datos);
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        insumos
                                    ORDER BY
                                        insumo");
        return $query->result_array();
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('insumos', $where);
        
        return $query->row_array();
    }
}
?>