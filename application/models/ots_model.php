<?php

class Ots_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('ots', $datos);
        return $this->db->insert_id();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        ots
                                    ORDER BY
                                        numero_ot DESC");
        return $query->result_array();
    }
    
    public function get_ultima_ot($idfabrica) {
        $query = $this->db->query("SELECT max(numero_ot) as ultima_ot
                                    FROM
                                        ots
                                    WHERE
                                        idfabrica = '$idfabrica'");
        return $query->row_array();
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('ots', $where);
        
        return $query->row_array();
    }
    
    public function gets_where($where) {
        $query = $this->db->get_where('ots', $where);
        
        return $query->result_array();
    }
}
?>