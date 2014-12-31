<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Add_distribuidor extends CI_Controller {
    public function __construct() {
        parent::__construct();
    
          $this->load->library(array('session','form_validation'));
            $this->load->database();
            $this->lang->load('user');
            $this->load->helper(array('url','form'));
       
            $this->load->config('amda');
            
            $this->load->model('avisos_model');
            $this->load->model('xml_model');
            $this->load->model('distribuidor_model');
    }
    public function index()
            {
                 if($this->session->userdata('role_id')== FALSE && ($this->session->userdata('role_id') != '1' || $this->session->userdata('role_id') != '2'))
                {
                 redirect(base_url().'index.php/amda');
                 $this->session->set_flashdata("valido","No tiene permiso para acceder a esta area");
                }else{
            $data['token'] = $this->token();
            $data['id_usuario'] = $this->session->userdata('id_usuario');
            $data['usuario']  = $this->session->userdata('username');
            $data['title'] = "Alta Distribuidoras";
            $data['menu']= 'menu_admin';
           
            $data['userdata']= $this->session->all_userdata();
            $data['distribuidor']= $this->distribuidor_model->all_distribuidor($this->session->userdata('id_usuario'));
           
               
            
            $data['contentx']="alta_distribuidoras";
            
            //$data['contentx'] = 'control_admin';
        $this->load->view('admin/template',$data);
                } // fin else
            }
            
     public function token()
             {
         $token = md5(uniqid(rand(),true));
         $this->session->set_userdata('token',$token);
          return $token;
             }
}
