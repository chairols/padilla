<?php

class Sucursales extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'form_validation',
            'session',
            'r_session'
        ));
        $this->load->model(array(
            'sucursales_model'
        ));
        $this->load->helper(array(
            'url'
        ));
    }
    
    public function index() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        $data['session'] = $session;
        $data['sucursales'] = $this->sucursales_model->gets();
        
        $this->load->view('layout/header', $data);
        $this->load->view('sucursales/index', $data);
        $this->load->view('layout/footer');
    }
    
    public function agregar() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        $data['session'] = $session;
        
        $this->form_validation->set_rules('sucursal', 'Sucursal', 'required');
        $this->form_validation->set_rules('direccion', 'Dirección', 'required');
        $this->form_validation->set_rules('localidad', 'Localidad', 'required');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $datos = array(
                'sucursal' => $this->input->post('sucursal'),
                'direccion' => $this->input->post('direccion'),
                'localidad' => $this->input->post('localidad'),
                'telefono' => $this->input->post('telefono')
            );
            
           $this->sucursales_model->set($datos); 
           
           redirect('/sucursales/', 'refresh');
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('sucursales/agregar');
        $this->load->view('layout/footer');
    }
}
?>