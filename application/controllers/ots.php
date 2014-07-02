<?php

class Ots extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session',
            'form_validation'
        ));
        $this->load->model(array(
            'ots_model',
            'articulos_model',
            'productos_model',
            'fabricas_model',
            'log_model'
        ));
        $this->load->helper(array(
            'url'
        ));
    }
    
    public function index() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        
        $data['ots'] = $this->ots_model->gets();
        foreach ($data['ots'] as $key => $value) {
            $data['ots'][$key]['fabrica'] = $this->fabricas_model->get_where(array('idfabrica' => $value['idfabrica']));
        }
        
        $this->load->view('layout/header_datatable', $data);
        $this->load->view('layout/menu');
        $this->load->view('ots/index');
        $this->load->view('layout/footer_datatable');
    }
    
    public function ver($idot = null) {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        if($idot == null) {
            redirect('/ots/', 'refresh');
        }
    }
    
    public function agregar() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        $data['alerta'] = '';   //  Se utiliza para cuando la OT ya existe
        
        $data['articulos'] = $this->articulos_model->gets();
        foreach ($data['articulos'] as $key => $value) {
            $data['articulos'][$key]['producto'] = $this->productos_model->get_where(array('idproducto' => $value['idproducto']));
        }
        $data['fabricas'] = $this->fabricas_model->gets();
        
        $this->form_validation->set_rules('fabrica', 'Fabrica', 'required|integer');
        $this->form_validation->set_rules('ot', 'Orden de Trabajo', 'required|integer');
        $this->form_validation->set_rules('articulo', 'Articulo', 'required|integer');
        $this->form_validation->set_rules('cantidad', 'Cantidad', 'required|numeric');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $datos = array(
                'idfabrica' => $this->input->post('fabrica'),
                'numero_ot' => $this->input->post('ot')
            );
            $resultado = $this->ots_model->get_where($datos);
            
            if(count($resultado) == 0) {
                $datos = array(
                    'idfabrica' => $this->input->post('fabrica'),
                    'numero_ot' => $this->input->post('ot'),
                    'cantidad' => $this->input->post('cantidad'),
                    'idarticulo' => $this->input->post('articulo'),
                    'observaciones' => $this->input->post('observaciones'),
                    
                );
                if($this->input->post('fecha_necesidad') == '') {
                    $datos['fecha_necesidad'] = NULL;
                } else {
                    $datos['fecha_necesidad'] = $this->input->post('fecha_necesidad');
                } 
                
                if($this->input->post('fecha_necesidad') == '') {
                    $datos['fecha_terminado'] = NULL;
                } else {
                    $datos['fecha_terminado'] = $this->input->post('fecha_terminado');
                } 
                
                if($this->input->post('numero_serie') == '') {
                    $datos['numero_serie'] = NULL;
                } else {
                    $datos['numero_serie'] = $this->input->post('numero_serie');
                } 
                
                if($this->input->post('ordendecompra') == 'null') {
                    $datos['ordendecompra'] = NULL;
                } else {
                    $datos['ordendecompra'] = $this->input->post('ordendecompra');
                }
                
                $id = $this->ots_model->set($datos);
                $fabrica = $this->fabricas_model->get_where(array('idfabrica' => $this->input->post('fabrica')));
                
                $log = array(
                   'tabla' => 'ots',
                   'idtabla' => $id,
                   'texto' => 'Se agregó: <br>'
                    . 'fabrica: '.$fabrica['fabrica'].'<br>'
                    . 'Número de Orden de Trabajo: '.$this->input->post('ot').'<br>'
                    . 'Cantidad: '.$this->input->post('cantidad').'<br>'
                    . 'Fecha de Necesidad: '.$this->input->post('fecha_necesidad').'<br>'
                    . 'Fecha de Terminado: '.$this->input->post('fecha_terminado').'<br>'
                    . 'Observaciones: '.$this->input->post('observaciones').'<br>'
                    . 'Número de serie: '.$this->input->post('numero_serie').'<br>'
                    . 'Orden de Compra: '.$this->input->post('ordendecompra'),
                   'tipo' => 'add',
                   'idusuario' => $session['SID']
                );
                
                $this->log_model->set($log);
                
                redirect('/ots/', 'refresh');
            } else {
                $data['alerta'] = '<div class="alert alert-danger">La Orden de Trabajo ya existe</div>';
            }
            
        }
        
        $this->load->view('layout/header_form', $data);
        $this->load->view('layout/menu');
        $this->load->view('ots/agregar');
        $this->load->view('layout/footer_form');
    }
    
    public function modificar($idot = null) {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        if($idot == null) {
            redirect('/ots/', 'refresh');
        }
        $data['session'] = $session;
        
        $data['articulos'] = $this->articulos_model->gets();
        foreach ($data['articulos'] as $key => $value) {
            $data['articulos'][$key]['producto'] = $this->productos_model->get_where(array('idproducto' => $value['idproducto']));
        }
        $data['fabricas'] = $this->fabricas_model->gets();
        
        $this->form_validation->set_rules('fabrica', 'Fabrica', 'required|integer');
        $this->form_validation->set_rules('ot', 'Orden de Trabajo', 'required|integer');
        $this->form_validation->set_rules('articulo', 'Articulo', 'required|integer');
        $this->form_validation->set_rules('cantidad', 'Cantidad', 'required|numeric');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            
        }
        
        $this->load->view('layout/header_form', $data);
        $this->load->view('layout/menu');
        $this->load->view('ots/modificar');
        $this->load->view('layout/footer_form');
    }
    
    public function ajax_fabricas($idfabrica) {
        $ultima_ot = $this->ots_model->get_ultima_ot($idfabrica);
        
        echo '<input type="text" maxlength="11" class="form-control" value="';
        if($ultima_ot['ultima_ot'] == null) {
            echo "1";
        } else {
            echo (int)$ultima_ot['ultima_ot'] + 1;
        }
        echo '" name="ot" autofocus>';
    }
}

?>