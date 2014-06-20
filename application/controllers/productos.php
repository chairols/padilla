<?php

class Productos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'form_validation',
            'session',
            'r_session'
        ));
        $this->load->helper(array(
            'url'
        ));
        $this->load->model(array(
            'productos_model'
        ));
    }
    
    
    public function index() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        
        $data['productos'] = $this->productos_model->gets();
        
        $this->load->view('layout/header', $data);
        $this->load->view('productos/index');
        $this->load->view('layout/footer');
        
    }
}

?>
