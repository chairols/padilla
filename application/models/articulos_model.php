<?php

class Articulos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('articulos', $datos);
        return $this->db->insert_id();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        articulos
                                    ORDER BY
                                        articulo");
        return $query->result_array();
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('articulos', $where);
        
        return $query->row_array();
    }
}
?>