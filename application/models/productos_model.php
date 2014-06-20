<?php

class Productos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('productos', $datos);
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        productos
                                    ORDER BY
                                        producto");
        return $query->result_array();
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('productos', $where);
        
        return $query->row_array();
    }
}
?>