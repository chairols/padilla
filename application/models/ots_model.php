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
                                    WHERE
                                        activo = '1'
                                    ORDER BY
                                        numero_ot DESC");
        return $query->result_array();
    }
    
    public function gets_pendientes() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        ots
                                    WHERE
                                        activo = '1' AND
                                        fecha_terminado <> 'NULL'
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
    
    public function update($datos, $id) {
        $array = array('idot' => $id);
        $this->db->update('ots', $datos, $array);
    }
    
    public function gets_vencidas() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        ots
                                    WHERE 
                                        fecha_necesidad <= CURDATE()");
        return $query->result_array();
    }
}
?>