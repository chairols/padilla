<?php

class Productos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        productos
                                    ORDER BY
                                        producto");
        return $query->result_array();
    }
}
?>