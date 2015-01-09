<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Informes_amda extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            
            //$this->load->config('amda');
            
           $this->load->library(array('session','form_validation'));
            $this->load->database();
            $this->lang->load('user');
            $this->load->helper(array('url','form'));
       
            $this->load->config('amda');
            
            $this->load->model('avisos_model');
            $this->load->model('xml_model');
            $this->load->model('distribuidor_model');
            $this->load->model('informes_model');
            $this->load->library('pagination');
        }
        
        public function Index() {
                               
             if($this->session->userdata('role_id')== FALSE && ($this->session->userdata('role_id') != '1' || $this->session->userdata('role_id') != '2'))
                {
                 redirect(base_url().'index.php/amda');
                 $this->session->set_flashdata("valido","No tiene permiso para acceder a esta area");
                }else{
            $data['token'] = $this->token();
            $data['id_usuario'] = $this->session->userdata('id_usuario');
            $data['usuario']  = $this->session->userdata('username');
            $list_informes=$this->informes_model->fecha_modificatorio();
            if($list_informes->num_rows() > 0)
                    {
                        
                        foreach($list_informes->result() as $row_list_avisos){
                        $data['is_modific'][$row_list_avisos->idaviso]= $this->xml_model->datos_modificatorio($row_list_avisos->idaviso);
                        }
                    }
            $data['fecha']=$this->NombreMes(Date('m'));        
            $data['userdata']= $this->session->all_userdata();
            $data['lista_informes']=$this->informes_model->listainformes();
            $data['title']="Administracion de Informes";
            $data['menu']='menu_admin';    
            $data['contentx']="view_informes";
             $this->load->view('admin/template',$data);
            
        }
        
}
public function TodosInformes()
                {
                $fecha = date('Ym');
                
                
             if($this->session->userdata('role_id')== FALSE && ($this->session->userdata('role_id') != '1' || $this->session->userdata('role_id') != '2'))
                {
                 redirect(base_url().'index.php/amda');
                 $this->session->set_flashdata("valido","No tiene permiso para acceder a esta area");
                }else{
            $data['token'] = $this->token();
            $data['id_usuario'] = $this->session->userdata('id_usuario');
            $data['usuario']  = $this->session->userdata('username');
              $list_informes=$this->informes_model->fecha_modificatorio();
                if($list_informes->num_rows() > 0)
                    {
                        
                        foreach($list_informes->result() as $row_list_avisos){
                        $data['is_modific'][$row_list_avisos->idaviso]= $this->xml_model->datos_modificatorio($row_list_avisos->idaviso);
                        }
                    }       
            $data['userdata']= $this->session->all_userdata();
            $data['lista_informes']=$this->informes_model->listainformes();
            $data['title']="Administracion de Informes";
            $data['menu']='menu_admin';    
            $data['contentx']="view_allinformes";
             $this->load->view('admin/template',$data);
                }
                }
                
        public function token()
             {
         $token = md5(uniqid(rand(),true));
         $this->session->set_userdata('token',$token);
          return $token;
             }
             
             public function NombreMes($mes) {
                 setlocale(LC_TIME, 'spanish');  
                    $nombre=strftime("%B",mktime(0, 0, 0, $mes, 1, 2000)); 
                    return $nombre;
             }     
}

