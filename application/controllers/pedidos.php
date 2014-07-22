<?php

class Pedidos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session',
            'form_validation',
            'uri'
        ));
        $this->load->helper(array(
            'url'
        ));
        $this->load->model(array(
            'clientes_model',
            'monedas_model'
        ));
    }
    
    public function index() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        $data['segmento'] = $this->uri->segment(1);
        $data['pedidos'] = array();
        
        $this->load->view('layout/header_datatable', $data);
        $this->load->view('layout/menu');
        $this->load->view('pedidos/index');
        $this->load->view('layout/footer_datatable');
    }
    
    public function agregar() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        $data['segmento'] = $this->uri->segment(1);
        $data['clientes'] = $this->clientes_model->gets();
        $data['monedas'] = $this->monedas_model->gets();
        
        $this->load->view('layout/header_form', $data);
        $this->load->view('layout/menu');
        $this->load->view('pedidos/agregar');
        $this->load->view('layout/footer_form');
    }
}

?>