<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

/**
 * 
 */
class Distribuidor_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    function all_distribuidor()
    {
         $query_users = $this->db->query("SELECT
                                             id_distribuidor as Id,
                                            razon_social as Nombre,
                                            rfc as RFC,
                                            email as Email
                                            FROM distribuidor 
                                            ORDER BY id_distribuidor asc;");
        return $query_users;
    }
     function Alta($tabla,$datos)
    {
       if($this->db->insert($tabla,$datos))
                {
           return TRUE;
                } else {
                    return FALSE;
                }
    }// fin insert
    public function DatosDistribuidor($id) {
        $query_distribuidor = $this->db->query("SELECT id_distribuidor,razon_social, rfc,email FROM distribuidor WHERE id_distribuidor = ".$id."");
        if($query_distribuidor->num_rows()>0)
            {
            return $query_distribuidor;
            }else
                {
                return FALSE;
                }
        
    }//fin DatosDistribuidor
    public function RfcDistribudor($id)
            {
                $query_rfc=  $this->db->query('select D.razon_social,D.rfc,U.rfc FROM am_users U , distribuidor D Where D.id_distribuidor = U.rfc and U.id ='.$id.'');
                //echo $this->db->last_query();
                if($query_rfc->num_rows()>0)
                    {
                    return $query_rfc;
                    }else
                        {
                        return FALSE;
                        }
                    
                   
            }
    public function UpdateDistribuidor() {
        $update_user= 'UPDATE distribuidor as D 
                        SET  D.razon_social = "'.$this->input->post('username').'",
                             D.email = "'.$this->input->post('email').'",
                             D.rfc = "'.$this->input->post('rfc').'"
                       WHERE D.id_distribuidor = "'.$this->input->post('id_distribuidor').'"';
        $query = $this->db->query($update_user);
        if($query)
            {
            return TRUE;
            }else{
                return FALSE;
            }
    }//fin updtae distribuidor
}