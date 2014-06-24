<?php

class Usuarios extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'form_validation',
            'session'
        ));
        $this->load->model(array(
            'usuarios_model'
        ));
        $this->load->helper(array(
            'url'
        ));
    }
    
    public function login() {
        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $usuario = $this->usuarios_model->get_usuario($this->input->post('usuario'), $this->input->post('password'));
            if(!empty($usuario)) {
                $datos = array(
                    'SID' => $usuario['idusuario'],
                    'usuario' => $usuario['usuario'],
                    'nombre' => $usuario['nombre'],
                    'apellido' => $usuario['apellido'],
                    'correo' => $usuario['correo']
                );
                $this->session->set_userdata($datos);
                redirect('/dashboard/', 'refresh');
            }
        }
        
        $session = $this->session->all_userdata();
        if(!empty($session['SID'])) {
            redirect('/home/', 'refresh');
        } else {
            $this->load->view('usuarios/login');
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('/usuarios/login/', 'refresh');
    } 
}

?>