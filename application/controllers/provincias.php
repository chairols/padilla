<?php

class Provincias extends CI_Controller {
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
            'provincias_model'
        ));
    }
    
    
    public function index() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        
        $data['provincias'] = $this->provincias_model->gets();
        
        $this->load->view('layout/header', $data);
        $this->load->view('provincias/index');
        $this->load->view('layout/footer');   
    }
    
    public function agregar() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        $data['session'] = $session;
        $data['alerta'] = '';  // Se utiliza si existe la provincia repetida
        
        $this->form_validation->set_rules('provincia', 'Provincia', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $datos = array(
                'provincia' => $this->input->post('provincia')
            );
            $resultado = $this->provincias_model->get_where($datos);
                    
            if(count($resultado) == 0) {
                $datos = array(
                    'provincia' => $this->input->post('provincia')
                );

               $this->provincias_model->set($datos); 

               redirect('/provincias/', 'refresh');
            } else {
                $data['alerta'] = '<div class="alert alert-danger">La provincia ya existe</div>';
            }
        }
        
        $this->load->view('layout/header', $data);
        $this->load->view('provincias/agregar');
        $this->load->view('layout/footer');
    }
}

?>
