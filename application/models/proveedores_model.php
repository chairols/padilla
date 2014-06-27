<?php

class Proveedores_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('proveedores', $datos);
        return $this->db->insert_id();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        proveedores
                                    ORDER BY
                                        proveedor");
        return $query->result_array();
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('proveedores', $where);
        
        return $query->row_array();
    }
}
?>
