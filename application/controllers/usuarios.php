<?php

class Usuarios extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function login() {
        $this->load->view('usuarios/login');
    }
}

?>

