<?php

class Prueba extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {

        $this->load->view('layout2/header');
        $this->load->view('layout2/container');
        $this->load->view('layout2/footer');
         
    }
}
?>