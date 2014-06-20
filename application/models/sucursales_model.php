<?php

class Sucursales_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('sucursales', $datos);
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        sucursales
                                    ORDER BY
                                        idsucursal");
        return $query->result_array();
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('sucursales', $where);
        
        return $query->row_array();
    }
}
?>
