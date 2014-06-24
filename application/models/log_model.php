<?php

class Log_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($array) {
        $this->db->insert('log', $array);
    }
    
    public function gets($tabla, $idtabla) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        log
                                    WHERE
                                        tabla = '$tabla' AND
                                        idtabla = '$idtabla'");
        return $query->result_array();
    }
}
?>