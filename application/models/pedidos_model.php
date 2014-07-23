<?php

class Pedidos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('pedidos', $datos);
        
        return $this->db->insert_id();
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('pedidos', $where);
        
        return $query->row_array();
    }
}
?>