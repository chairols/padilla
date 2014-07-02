<?php

class Prueba extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'form_validation'
        ));
        $this->load->helper(array(
            'url'
        ));
    }
    
    public function index() {
        $data['session']['nombre'] = 'Juan';
        $data['session']['apellido'] = 'Perez';
        $data['alerta'] = '';
        
        $this->load->view('layout/header_form', $data);
        $this->load->view('layout/menu');
        //$this->load->view('provincias/agregar');
        $this->load->view('prueba/index');
        $this->load->view('layout/footer_form');
    }
    
    public function nulo() {
        $this->load->model(array(
            'prueba_model'
        ));
        
        $array['date'] = null;
        
        $this->prueba_model->set($array);
        
    }
}
?>