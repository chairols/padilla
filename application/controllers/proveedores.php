<?php

class Proveedores extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session',
            'form_validation'
        ));
        $this->load->helper(array(
            'url'
        ));
        $this->load->model(array(
            'proveedores_model',
            'provincias_model'
        ));
    }
    
    public function index() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        $data['session'] = $session;
        $data['proveedores'] = $this->proveedores_model->gets();
        
        $this->load->view('layout/header', $data);
        $this->load->view('proveedores/index');
        $this->load->view('layout/footer');
    }
    
    public function agregar() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        $data['session'] = $session;
        $data['alerta'] = '';  // Se utiliza si existe el proveedor repetida
        $data['provincias'] = $this->provincias_model->gets();
        
        $this->form_validation->set_rules('proveedor', 'Proveedor', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $datos = array(
                'proveedor' => $this->input->post('proveedor')
            );
            $resultado = $this->proveedores_model->get_where($datos);
                    
            if(count($resultado) == 0) {
                $datos = array(
                    'proveedor' => $this->input->post('proveedor')
                );

               $this->proveedores_model->set($datos); 

               redirect('/proveedores/', 'refresh');
            } else {
                $data['alerta'] = '<div class="alert alert-danger">El proveedor ya existe</div>';
            }
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('proveedores/agregar');
        $this->load->view('layout/footer');
    }
}
?>