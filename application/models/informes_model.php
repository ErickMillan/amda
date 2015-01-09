<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Informes_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function listainformes()
                                {
        /*
            $consulta = $this->db->get('provincias_es',$por_pagina,$segmento);
            if($consulta->num_rows()>0)
            {
                foreach($consulta->result() as $fila)
        {
            $data[] = $fila;
        }
                    return $data;
            }
         *          */
        
        
                             $lista_avisos = $this->db->query('SELECT 
                                                              case when A.prioridad = 1 then "Normal" 
                                                              when A.prioridad = 2 then "24 hrs" end as prioridad ,  
                                                              A.idaviso,A.referencia,I.mes_reportado
                                                      FROM aviso A,informe I
                                                      WHERE A.idinforme = I.idinforme LIMIT 10');
                                                      
                                if($lista_avisos->num_rows()>0)
                                    {
                                        foreach ($lista_avisos->result() as $fila)
                                            {
                                            $data[]=$fila;
                                            }
                                            return $data;
                                            }
                                    }
//AND I.mes_reportado='.$fecha.'');
                               // }
                                
    public function total_informes()
            {
                 $total_avisos = $this->db->query('SELECT 
                                                              case when A.prioridad = 1 then "Normal" 
                                                              when A.prioridad = 2 then "24 hrs" end as prioridad ,  
                                                              A.idaviso,A.referencia,I.mes_reportado
                                                      FROM aviso A,informe I
                                                      WHERE A.idinforme = I.idinforme');
                                                      
                                return $total_avisos->num_rows();
            } //total informes 
            public function fecha_modificatorio()
                    {
                        $modificatorio = $this->db->query('SELECT 
                                                              case when A.prioridad = 1 then "Normal" 
                                                              when A.prioridad = 2 then "24 hrs" end as prioridad ,  
                                                              A.idaviso,A.referencia,I.mes_reportado
                                                      FROM aviso A,informe I
                                                      WHERE A.idinforme = I.idinforme');
                                                      
                                return $modificatorio;
                    }
}
