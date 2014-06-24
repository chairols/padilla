<?php

class Proveedores_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        proveedores
                                    ORDER BY
                                        proveedor");
        return $query->result_array();
    }
}
?>
