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
                                            rfc as RFC
                                            FROM distribuidor 
                                            ORDER BY id_distribuidor asc;");
        return $query_users;
    }
}