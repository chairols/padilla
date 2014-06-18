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
}
?>
