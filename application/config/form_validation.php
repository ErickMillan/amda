<?php

$config = array(
    'distribuidor/nuevoaviso' => array(
                                array(
                                    'field' => 'mes_reportado',
                                    'label' => 'Mes a reportar',
                                    'rules' => 'required|trim|max_length[4]|xss_clean'
                                    
                                ),
                                array(
                                    'field' => 'select_tipo_aviso',
                                    'label' => 'Tipo aviso',
                                    'rules' => 'required|callback_check_default'
                                )    
    ),
    'operaciones/guardaroperacion'=>array(
                                 array(
                                     'field'=>'fecha_operacion',
                                     'label'=>'Fecha de la operacion',
                                     'rules'=>'required|xss_clean'
                                 ),   
                                 array(
                                     'field'=>'cp_sucursal_operacion',
                                     'label'=>'Codigo postal',
                                     'rules'=>'required'
                                     
                                 ),
                                 array(
                                     'field'=>'tipo_operacion',
                                     'label'=>'tipo de operacion',
                                     'rules'=>'required|callback_check_default'
                                     )
                                  
                                 
                                
    ),
'distribuidor/guardardatosaviso' => array(
                                array(
                                    'field' => 'mes_reportado',
                                    'label' => 'Mes a reportar',
                                    'rules' => 'required|trim|max_length[6]|xss_clean'
                                    
                                ),
                  
                                array(
                                 'field'   => 'referencia_aviso', 
                                 'label'   => 'Referencia del aviso', 
                                 'rules'   => 'required|trim|min_length[1]|max_length[14]|xss_clean|callback_check_referencia'
                                 ),
                                 array(
                                     'field'=> 'prioridad_aviso',
                                     'label'=> 'Prioridad del aviso',
                                     'rules'=> 'required|callback_check_default'
                                 ),
                                 array(
                                     'field'=> 'tipo_alerta',
                                     'label'=> 'Tipo de alerta',
                                     'rules'=> 'required|callback_check_default'
                                 )
                                ),
'distribuidor/guardardatosavisoceros'=> array(
                  
                                 array(
                                 'field'   => 'referencia_aviso', 
                                 'label'   => 'Referencia del aviso', 
                                 'rules'   => 'required|trim|min_length[1]|max_length[14]|xss_clean|callback_check_referencia'
                                 ),
                                 array(
                                     'field'=> 'mes_reportado',
                                     'label'=> 'Mes reportado',
                                     'rules' => 'required|trim|max_length[6]|xss_clean'
                                 )
                                 
                                ),
'persona_aviso/guardarfideicomiso'=> array(
                                    array(
                                        'field'=>'nombre_persona',
                                        'label'=>'Nombre',
                                        'rules'=>'required'
                                    ),
                                    array(
                                        'field'=>'razon_social',
                                        'label'=>'Razon Social',
                                        'rules'=>'required'
                                    ),
                                    array(
                                        'field'=>'identificador_fideicomiso',
                                        'label'=>'Identificador Fideicomiso',
                                        'rules'=>'required'
                                    ),
                                    array(
                                        'field'=>'ap_paterno',
                                        'label'=>'Apellido Paterno',
                                        'rules'=>'required'
                                    ),
                                    array(
                                        'field'=>'ap_materno',
                                        'label'=>'Apellido Materno',
                                        'rules'=>'required'
                                    ),
                                    array(
                                        'field'=>'fecha_nac',
                                        'label'=>'Fecha de Nacimiento',
                                        'rules'=>'required'
                                       
                                    ),
                                    array(
                                        'field'=>'lada',
                                        'label'=>'Clave del Pais',
                                        'rules'=>'required'
                                    ),
                                    array(
                                        'field'=>'num_tel',
                                        'label'=>'Numero de telefono',
                                        'rules'=>'required'
                                       
                                    ),
    
                                    ),//FIN ARRAY DISTRIBUIDOR/GUARADR AVISO
'persona_aviso/guardardatospersona'=> array
                                    (
                                     array(
                                         'field' => 'nombre_persona',
                                         'label' => 'Nombre',
                                         'rules' => 'required'
                                     ),
                                      array(
                                         'field' => 'fecha_nac',
                                         'label' => 'Fecha de nacimiento',
                                         'rules' => 'required'
                                     ),
                                     array(
                                         'field' => 'rfc',
                                         'label' => 'RFC',
                                         'rules' => 'min_length[10]|max_length[14]|xss_clean'
                                     ),
                                     array(
                                         'field' => 'curp',
                                         'label' => 'CURP',
                                          'rules'=> 'max_length[18]|xss_clean' 
                                     ),
                                      array(
                                         'field' => 'ap_paterno',
                                         'label' => 'Apellido paterno',
                                         'rules' => 'required'
                                     ),
                                      
                                      array(
                                         'field' => 'ap_materno',
                                         'label' => 'Apellido materno',
                                         'rules' => 'required'
                                     ),
                                     
                                      array(
                                         'field' => 'nacionalidad',
                                         'label' => 'Nacionalidad',
                                         'rules' => 'required|callback_check_default'
                                     ),
                                      array(
                                         'field' => 'pais_nacimiento',
                                         'label' => 'Pais nacimiento',
                                         'rules' => 'callback_check_default'
                                     ),
                                      array(
                                         'field' => 'clave_actividad',
                                         'label' => 'Clave actividad',
                                         'rules' => 'required|callback_check_default'
                                     ),
                                      array(
                                         'field' => 'colonia',
                                         'label' => 'Colonia',
                                         'rules' => 'required'
                                     ),
                                      array(
                                         'field' => 'calle',
                                         'label' => 'Calle',
                                         'rules' => 'required'
                                     ),
                                      array(
                                         'field' => 'num_ext',
                                         'label' => 'Numero exterior',
                                         'rules' => 'required'
                                     ),
                                     
                                     array(
                                         'field' => 'cp',
                                         'label' => 'Codigo postal',
                                         'rules' => 'required'
                                     ),
                                      array(
                                         'field' => 'lada',
                                         'label' => 'Lada telefono',
                                         'rules' => 'required'
                                     ),
                                      array(
                                         'field' => 'num_tel',
                                         'label' => 'Numero telefonico',
                                         'rules' => 'numeric'
                                     ),
                                     array('field' => 'correo',
                                            'label'=> 'e-mail',
                                            'rules'=> 'valid_email')
                                      
                                    )//fin persona_aviso/guardardatospersona
            );//FIN ARRAY CONFIG
