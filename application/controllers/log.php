<?php

class Log extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session'
        ));
        $this->load->helper(array(
            'url'
        ));
        $this->load->model(array(
            'log_model',
            'usuarios_model'
        ));
    }
    
    public function ver($tabla, $idtabla) {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        $data['logs'] = $this->log_model->gets($tabla, $idtabla);
        
        foreach ($data['logs'] as $key => $value) {
            $data['logs'][$key]['usuario'] = $this->usuarios_model->get($value['idusuario']);
        }
        $this->load->view('layout/header', $data);
        $this->load->view('log/ver');
        $this->load->view('layout/footer');
    }
}
?>