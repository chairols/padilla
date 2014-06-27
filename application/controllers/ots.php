<?php

class Ots extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session'
        ));
        $this->load->model(array(
            'ots_model'
        ));
    }
    
    public function index() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        
        $data['ots'] = $this->ots_model->gets();
        
        $this->load->view('layout/header_datatable', $data);
        $this->load->view('layout/menu');
        $this->load->view('ots/index');
        $this->load->view('layout/footer_datatable');
    }
    
    public function agregar() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        
        
        
        $this->load->view('layout/header_form', $data);
        $this->load->view('layout/menu');
        //$this->load->view('ots/agregar');
        $this->load->view('layout/footer_form');
    }
}

?>