<?php

class Proveedores extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session'
        ));
        $this->load->helper(array(
            'url'
        ));
    }
    
    public function index() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        $data['session'] = $session;
        
        $this->load->view('layout/header', $data);
        $this->load->view('proveedores/index');
        $this->load->view('layout/footer');
    }
}
?>