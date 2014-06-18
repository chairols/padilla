<?php

class Sucursales_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('sucursales', $datos);
    }
}
?>
