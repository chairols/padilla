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
            'monedas_model',
            'pedidos_model',
            'provincias_model',
            'log_model'
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
        
        $this->form_validation->set_rules('cliente', 'Cliente', 'required');
        $this->form_validation->set_rules('moneda', 'Moneda', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $datos = array(
                'idcliente' => $this->input->post('cliente'),
                'idmoneda' => $this->input->post('moneda'),
                'ordendecompra' => $this->input->post('ordendecompra')
            );
            
            $idpedido = $this->pedidos_model->set($datos);
            
            $cliente = $this->clientes_model->get_where(array('idcliente' => $this->input->post('cliente')));
            $moneda = $this->monedas_model->get_where(array('idmoneda' => $this->input->post('moneda')));
            
            $log = array(
                'tabla' => 'pedidos',
                'idtabla' => $idpedido,
                'texto' => 'Se agregó: <br>'
                 . 'cliente: '.$cliente['cliente'].'<br>'
                 . 'moneda: '.$moneda['moneda'].'<br>'
                 . 'orden de compra: '.$this->input->post('ordendecompra'),
                'tipo' => 'add',
                'idusuario' => $session['SID']
            );

            $this->log_model->set($log);
                
            redirect('/pedidos/agregar_items/'.$idpedido.'/', 'refresh');
        }
        
        $this->load->view('layout/header_form', $data);
        $this->load->view('layout/menu');
        $this->load->view('pedidos/agregar');
        $this->load->view('layout/footer_form');
    }
    
    public function agregar_items($idpedido = null) {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        $data['segmento'] = $this->uri->segment(1);
        
        if($idpedido == null) {
            redirect('/pedidos/', 'refresh');
        }
        
        $data['pedido'] = $this->pedidos_model->get_where(array('idpedido' => $idpedido));
        $data['cliente'] = $this->clientes_model->get_where(array('idcliente' => $data['pedido']['idcliente']));
        $data['cliente']['provincia'] = $this->provincias_model->get_where(array('idprovincia' => $data['cliente']['idprovincia']));
        $data['pedido']['moneda'] = $this->monedas_model->get_where(array('idmoneda' => $data['pedido']['idmoneda']));
        
        $this->load->view('layout/header_form', $data);
        $this->load->view('layout/menu');
        $this->load->view('pedidos/agregar_items');
        $this->load->view('layout/footer_form');
    }
}

?>