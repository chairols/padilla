<?php

class Proveedores_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    /*
     * 
     * proveedores/agregar
     * 
     */
    public function set($datos) {
        $this->db->insert('proveedores', $datos);
        return $this->db->insert_id();
    }
    
    /*
     * 
     * proveedores/index
     * 
     */
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        proveedores
                                    ORDER BY
                                        proveedor");
        return $query->result_array();
    }
    
    /*
     * 
     * proveedores/agregar
     * 
     */
    public function get_where($where) {
        $query = $this->db->get_where('proveedores', $where);
        
        return $query->row_array();
    }
}
?>