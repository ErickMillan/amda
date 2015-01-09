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
             
      public function create()
              {
               
        
         if($this->session->userdata('role_id')== FALSE && ($this->session->userdata('role_id') != '1' || $this->session->userdata('role_id') != '2'))
                {
              redirect(base_url().'index.php/amda');
              $this->session->set_flashdata("error_permiso","No tiene permiso para acceder a esta area");
              } else {
                  
                  $data['distribuidor']= $this->distribuidor_model->all_distribuidor();
                  $data['token']= $this->token();
                  $data['userdata']= $this->session->all_userdata();
                  $data['id_usuario']=  $this->session->userdata('id_usuario');
                  $data['usuario']= $this->session->userdata('username');
                  $data['title'] = "Alta Distribuidor";
                  $data['menu'] = "menu_admin";
                  $data['contentx'] = "create_distribuidor";
                    $data['inp_razon_social']= array('class'=>'form-control','id'=>'inp_razon_social','name'=>'inp_razon_social','value'=>  set_value('inp_razon_social'),'type'=>'text');
                  $data['inp_email']= array('class'=>'form-control','id'=>'email','name'=>'email','value'=>  set_value('email'),'type'=>'email');
                  $data['inp_rfc']= array('class'=>'form-control','id'=>'rfc','name'=>'rfc','value'=>  set_value('rfc'),'type'=>'text','onblur'=>'ValidaRfc(this.value)');
                  //$data['inp_password']= array('class'=>'form-control','id'=>'password','name'=>'password','value'=>  set_value('password'),'type'=>'password');    
                  $data['submit']=array('class'=>'form-control','id'=>'save','name'=>'save','value'=>'Guardar','type'=>'submit');
                  $data['attrib_form']=array('method'=>'post','enctype'=>'multipart/form-data','name'=>'form_newuser','id'=>'form_newuser');
                  $data['id_user']=  $this->session->userdata('id_usuario');
                  $this->load->view('admin/template',$data);
              }
           
        
        
              }//fin create
             
    public function save_distribuidor() {
                
            $this->form_validation->set_rules('inp_razon_social','Razon Social','required|xss_clean');
            $this->form_validation->set_rules('email','Correo Electronico','required|xss_clean|valid_email|callback_check_email');
           $this->form_validation->set_rules('rfc','RFC','required|xss_clean');
           // $this->form_validation->set_rules('permisos','Permisos de usuario','required');
            //$this->form_validation->set_rules('password','Password','required|min_length[6]');
            //$this->form_validation->set_message('min_length', 'El campo  %s debe tener minimo 6 caracteres');
            $this->form_validation->set_message('required', 'El campo %s es obligatorio');
            $this->form_validation->set_message('valid_email', 'El email %s no es valido');
            $this->form_validation->set_message('check_email','El E-mail ingresado ya existe, ingresa otro e-mail valido');
           if ($this->form_validation->run() == FALSE)
        {
           //       echo validation_errors(); 
           $this->create();
        }
        else
            {
            $data_distribuidor=array(
                            'id_distribuidor'=> NULL,
                            //'role_i'=> $this->input->post('permisos'),
                            'razon_social'=> strtoupper($this->input->post('inp_razon_social')),
                            'email'=> $this->input->post('email'),
                            //'display_name'=> $this->input->post('username'),
                            //'active'=> $this->input->post('active'),
                            'rfc'=> strtoupper($this->input->post('rfc')),
                            
                          //  'create_for' => $this->input->post('id'),
                          //  'id_distribuidor'=>  $this->input->post('id_distribuidor')
                
            );
              $alta_distribuidor = $this->distribuidor_model->Alta('distribuidor',$data_distribuidor);
                if($alta_distribuidor == true)
               {
                    $this->session->set_flashdata('correcto','Distribuidor Creado correctamente');
                    redirect(base_url('/index.php/admin'));
               }else
                   {
                    $this->session->set_flashdata('error','Error el Distribuidor no fue creado intente mas tarde');
                    redirect(base_url('/index.php/admin'));
                   }
            }
            
    }   //save distribuidor
       public function Edit($id_distribuidor) {
           
           $datos_distribuidor=$this->distribuidor_model->DatosDistribuidor($id_distribuidor);
           if($datos_distribuidor != FALSE)
               {
               foreach ($datos_distribuidor->result() as $value) {
                      
                  $data['inp_razon_social']= array('class'=>'form-control','id'=>'username','name'=>'username','value'=>  $value->razon_social,'type'=>'text');
                  //$data['user_edit']= array('class'=>'form-control','id'=>'user_edit','name'=>'user_edit','value'=>  $id,'type'=>'hidden');
                  $data['update_user']=TRUE; 
                  $data['inp_email']= array('class'=>'form-control','id'=>'email','name'=>'email','value'=>  $value->email,'type'=>'email');
                  $data['inp_rfc']= array('class'=>'form-control','id'=>'rfc','name'=>'rfc','value'=>  $value->rfc,'type'=>'text','onblur'=>'ValidaRfc(this.value)');
                  //$data['inp_password']= array('class'=>'form-control','id'=>'password','name'=>'password','value'=>'','type'=>'password');    
                  $data['submit']=array('class'=>'form-control','id'=>'save','name'=>'save','value'=>'Guardar','type'=>'submit');
                  $data['attrib_form']=array('method'=>'post','enctype'=>'multipart/form-data','name'=>'form_newuser','id'=>'form_newuser');
                  $data['update_user']=TRUE; 
                  $data['id_distribuidor']=$id_distribuidor;
                  //$data['permisos']=$value->role_id;
                  //$data['activo']=$value->active;
                      
                  }
               }
                $data['userdata']= $this->session->all_userdata();
                $data['id_usuario']=  $this->session->userdata('id_usuario');
                $data['usuario']= $this->session->userdata('username');
                $data['title'] = "Editar datos Distribudor";
                $data['menu'] = "menu_admin";
                $data['contentx'] = "create_distribuidor";
                $data['id_user']=  $this->session->userdata('id_usuario');
                $this->load->view('admin/template',$data);
       } // fin edit 
       
       public function Update() {
            $this->form_validation->set_rules('username','Razon Social','required|xss_clean');
            $this->form_validation->set_rules('email','Correo Electronico','required|xss_clean|valid_email');
            $this->form_validation->set_rules('rfc','RFC','required|xss_clean');
            //$id_user = $this->input->post('user_edit'); 
            if ($this->form_validation->run() == FALSE)
        {
           //       echo validation_errors(); 
           $this->Edit($this->input->post('user_edit'));
        }else{
            /* $data_distribuidor=array(
                            'id'=> $this->input->post('id_distribuidor'),
                            'email'=> $this->input->post('email'),
                            'rfc'=> $this->input->post('rfc')
                            );*/
           $update_distribuidor = $this->distribuidor_model->UpdateDistribuidor();
           
           if($update_distribuidor == true)
               {
                    $this->session->set_flashdata('correcto','Datos Actualizados correctamente');
                    redirect(base_url('/index.php/admin'));
               }else
                   {
                    $this->session->set_flashdata('error','Error los datos no fueron actualizados, intente mas tarde');
                    redirect(base_url('/index.php/admin'));
                   }
          }
           
       }//fin update
}
