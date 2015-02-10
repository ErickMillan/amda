<div id="page-wrapper">
   

  
        <div class="content-header">
            <h3 class="icon-head head-products">Datos Generales persona aviso</h3>
            <div class="content-buttons-placeholder"style="width: 0px; height: 15px;">
                
                    
                   <!--<input id="submit_persona_aviso" type="submit" value ="guardar y continuar">-->
                  
                    <!--<button type="button" id="add_beneficiario" class="scalable add_beneficiario" onclick="//addbeneficiario();"> -->
                        <!--<span>-->
                           <!-- <a data-target="#form_beneficiario" data-toggle="modal" class="nyroModal">Agregar Due&ntilde;o Beneficiario</a></span>-->
                        <!--<a data-target="#form_beneficiario" data-toggle="modal" class="nyroModal">Dueño Beneficiario</a>-->
                    <!--</button>-->
                    
               
            </div>
        </div>
     <?php
    // $att_form=array('name'=>'formDatospersona','id'=>'form_persona_aviso');
      //echo form_open(base_url().'index.php/persona_aviso/guardardatospersona',$att_form);
      ?>
    <form id="form_persona_aviso" name="formDatospersona" accept-charset="utf-8" method="post" action="http://localhost/amda1/amda/index.php/persona_aviso/guardardatospersona" >
    <?=validation_errors('<div class="status_box warning"><h6>Advertencia</h6><ul><li>','</li></ul></div>'); ?>
        <div class="middle-container">
             <?php
            if($this->session->flashdata('valido') != ''){
            ?>
        <div class="status_box success">
            <h6>Exito</h6>
            <ul><li><?=$this->session->flashdata('valido')?></li></ul>
        </div>
    <?php }else{ ?>
            <div class="status_box"></div>
    <?php }?>
            <div class="entry-edit">
                <div class="entry-edit-head">
                    <h4 class="icon-head head-customer-view"><?php echo $subtitle;?></h4>
                </div>

            </div>
            <fieldset>
                <div class="highlight">
                    INSTRUCCIONES : Capture los datos del cliente o usuario con quien haya celebrado la operaci&oacute;n. 
               </div>
                <br>
                <label>Tipo de persona</label>
                <br>
                <select width="245px" id='tipo_persona' class='requerido tipo_persona form-control' name='tipo_persona'>
                    <option selected value=''>Selecciona un tipo de persona</option>
                    <option value='1'>Persona F&iacute;sica</option>
                    <option value='2'>Persona Moral</option>
                    <option value='3'>Fideicomiso</option>
                    
                </select>
                <hr style=" border-color: #E1E1E8 -moz-use-text-color -moz-use-text-color;">
                <div class="div_tipo_persona">
                    
                </div>
                <?=form_hidden('id_aviso',$id_aviso)?>
            </fieldset>
            <div class="content-header">
            <div class="content-buttons-placeholder"style="width: 0px; height: 15px;">
                <p class="content-buttons form-buttons">
                    <button type="button" id="save" class="scalable save gradient" onclick="submitformDatospersona(); wait();" style="">
                        <span id="save_persona">Guardar y continuar</span>
                    </button>
                    
                  
                    
                </p>
            </div>
        </div>
       	</div>
    </form>
  
    

</div><!-- /.modal -->


<div class="modal fade" id="form_beneficiario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <?php //if(isset($beneficiario) && $beneficiario->num_rows() > 0){
            // foreach ($beneficiario->result() as $row_beneficiario){?>
 <!-- Modal -->
 <div class="modal-dialog" style="width: 800px">
      <form class="form-horizontal"  id="form_form_beneficiario" method="post" action="<?php echo base_url().'index.php/beneficiario/save_beneficiario'; ?>">
        
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">
            <div class="panel-heading">
                <h5 class="text-info">AGREGAR DATOS DE DUE&Nacute;O BENEFICIARIO :</h5>
                
            </div>
        </h4>
      </div>
          
      <div class="modal-body">
          
          <div style="margin:30px;"></div>
          <div class="form-group">
              
                   <select id='tipo_persona_beneficiario' class='tipo_persona_beneficiario form-control' name='tipo_persona_beneficiario'>
                    <option selected value=''>Selecciona un tipo de persona</option>
                    <option value='1'>Persona F&iacute;sica</option>
                    <option value='2'>Persona Moral</option>
                    <option value='3'>Fideicomiso</option>
                    
                </select>
                <div class="div_tipo_persona_beneficiario">
                    
                </div>
                      
              </select>
          </div>
          
      </div>
          </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
       </form> 
         
    </div><!-- /.modal-content -->
    <?php 
             // }
            //  }else{
              ?>
            
      
    <!-- 
 <div class="modal-dialog" style="width: 800px">
      <form class="form-horizontal"  id="form_form_beneficiario" method="post" action="<?php echo base_url().'/index.php/beneficiario/save_beneficiario'; ?>">
        
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">
            <div class="panel-heading">
                <h5 class="text-info">AGREGAR DATOS DE DUE&Nacute;O BENEFICIARIO :</h5>
            
            </div>
        </h4>
      </div>
          
      <div class="modal-body">
          
          <div style="margin:30px;"></div>
          <div class="form-group">
                   <select id='tipo_persona_beneficiario' class='tipo_persona_beneficiario form-control' name='tipo_persona_beneficiario'>
                    <option selected value=''>Selecciona un tipo de persona</option>
                    <option value='1'>Persona Fisica</option>
                    <option value='2'>Persona Moral</option>
                    <option value='3'>Fideicomiso</option>
                    
                </select>
                <div class="div_tipo_persona_beneficiario">
                    
                </div>
                      
              </select>
          </div>
          
      </div>
          </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
       </form> 
    </div><!-- /.modal-content -->
              <?php //}?>
  <script>
      //*[@id="tipo_persona"]html body.modal-open div#wrapper div#form_beneficiario.modal div.modal-dialog form#form_form_beneficiario.form-horizontal div.modal-content div.modal-body div.form-group select#tipo_persona.tipo_persona
       $(document).ready(function() {
            $("select#tipo_persona_beneficiario.tipo_persona_beneficiario").change(function() {
                $("select#tipo_persona_beneficiario.tipo_persona_beneficiario option:selected").each(function(){
                    tipo_persona = $('#tipo_persona_beneficiario').val();
                    $.post("<?php echo base_url();?>index.php/beneficiario/tipo_persona", {
                        tipo_persona : tipo_persona
                        }, function(data) {
                            $(".div_tipo_persona_beneficiario").html(data);
                });
                
                });
        });
        });
   $(function(){
	   
$.validator.addMethod('nombrev', function(value, element)
	{
		return this.optional(element) || /^[a-zA-ZñÑñÁÉÍÓÚ]+$/.test(value);
		
	
	});
	
$.validator.addMethod('apellidosv', function(value, element)
	{
		return this.optional(element) || /^[a-zA-ZñÑñÁÉÍÓÚ]+$/.test(value);
		
	
	});
$.validator.addMethod('fechav', function(value, element)
	{
		return this.optional(element) || /^([0-9]{8})$/.test(value);
		
	
	});
	

$.validator.addMethod('coloniav', function(value, element)
	{
		return this.optional(element) || /^[,ñ\.:\/'\$-a-z ]+$/i.test(value);
		
	
	});	
$.validator.addMethod('sinparentesis', function(value, element)
	{
		return this.optional(element) || /^[,ñ\.:\/'\$-a-z ]+$/i.test(value);
		
	
	});	
$.validator.addMethod('codigopostal', function(value, element)
	{
		return this.optional(element) || /^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/.test(value);
		
	
	});	
$.validator.addMethod('codigopostalext', function(value, element)
	{
		return this.optional(element) || /^[A-Za-z0-9Ññ]{4,12}$/.test(value);
		
	
	});	
$.validator.addMethod('telefonov', function(value, element)
	{
		return this.optional(element) || /^[0-9]{9,12}$/.test(value);
		
	
	});	


	
	


	
    $('#form_form_beneficiario').validate({
       rules : {
            nombre_persona:{required :true, nombrev:true},
                 fecha_nac:{required:true},
                ap_paterno:{required:true, apellidosv:true},
                      
                ap_materno:{required: true, apellidosv:true},
              nacionalidad:{required:true},
           pais_nacimiento:{required:true},
       actividad_economica:{required:true},
selecttipo_domicilio_beneficiario:{required:true},
                  colonia:{required:true, coloniav:true},
                    calle:{required:true, sinparentesis:true},
                  num_ext:{required:true,number :true, sinparentesis:true},
                  num_int:{number:true, sinparentesis:true},
                      cp :{required:true, codigopostal:true},
					  cpext:{required:true, codigopostalext:true},
                     lada:{required:true },
                  num_tel:{required:true, telefonov:true},   
                   correo:{email: true},
             razon_social:{required: true, sinparentesis:true},
       fecha_constitucion:{required: true},
                rfc_moral:{required: true},
                   estado:{required: true},
                   ciudad:{required: true},
          rfc_fideicomiso:{required: true},
identificador_fideicomiso:{required:true, sinparentesis:true},
          tipo_persona_beneficiario :{required:true}
           
       },
        messages :{
           nombre_persona:{required :"Se requiere un nombre", nombrev:"Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( ).Nota. Los paréntesis no se incluyen en caracteres permitidos."},
                 fecha_nac:{required:"Se requiere fecha nacimiento"},
                ap_paterno:{required:"Se requiere apellido paterno", apellidosv:"letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( )."},
                      
                ap_materno:{required:"Se requiere apellido materno", apellidosv:"letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( )."},
              nacionalidad:{required:"Nacionalidad requerida"},
           pais_nacimiento:{required:"Pais nacimiento requerido"},
       actividad_economica:{required:"Se requiere actividad economica"},
selecttipo_domicilio_beneficiario :{required:"Selecciona el tipo de domicilio"},
                  colonia:{required:"Campo colonia requerido", coloniav:"Únicamente acepta los siguientes caracteres letras de A-Z (mayúsculas y  sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), coma (,), punto (.), dos puntos (:), diagonal (/), guión medio(-), paréntesis ( )."},
                    calle:{required:"Campo calle requerido", sinparentesis:"letras de A-Z (mayúsculas y  sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), coma (,), punto (.), dos puntos (:), diagonal (/)."},
                  num_ext:{required:"Campo numero exterior requierido",number :"Ingresa un numero valido"},
                  
                      cp :{required:"Se requiere un codigo postal", codigopostal:"Introduce un código postal valido"},
					  cpext:{required:"Se requiere un codigo postal", codigopostalext:"Introduce un código postal valido"},
                     lada:{required:"Clave pais requerido"},
                  num_tel:{required:"Numero de telefono requerido", telefonov:"El numero de telefono no es valido"},   
                   correo:{email: "Ingresa un correo valido"},
             razon_social:{required: "Se necesita una razon social", sinparentesis:"Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), gato (#), guión medio (-), punto (.), &, coma (,), guión bajo (_), @, apóstrofe (')."},
       fecha_constitucion:{required: "Se requiere fecha de constitucion"},
                rfc_moral:{required: "Se requiere RFC"},
                   estado:{required: "Campo estado requerido"},
                   ciudad:{required: "Campo ciudad requerido"},
          rfc_fideicomiso:{required: "Se requiere RFC"},
identificador_fideicomiso:{required:"Se requiere Identificador del fideicomiso", sinparentesis:"letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), gato (#), guión medio (-), punto (.), &, coma (,), guión bajo (_), @, apóstrofe (')."},
          tipo_persona_beneficiario :{required:"Selecciona un tipo de persona"}
       }
    });
   

$('#form_persona_aviso').validate({
	
		
       rules : {
           nombre_persona : {required :true, maxlength : 200, nombrev:true},
               ap_paterno : {required:true, apellidosv:true},
               ap_materno : {required:true, apellidosv:true},
                       rfc: {required:true},
		         fecha_nac: {number:true, fechav:true},
		           colonia: {required:true, coloniav:true},
				     calle: {required:true, sinparentesis:true} ,
				   num_ext: {required:true, sinparentesis:true},
				   num_int: {required:true, sinparentesis:true},
				        cp: {required:true, codigopostal:true},
						cpext:{required:true, codigopostalext:true},
			  razon_social: {required:true, sinparentesis:true},
	    fecha_constitucion: {required:true, fechav:true},  
 identificador_fideicomiso: {required:true, sinparentesis:true}, 
 				   num_tel: {required:true, telefonov:true}              
       },
       messages :{
           nombre_persona :{
			   required :"Se requiere un nombre", 
			   maxlength :"El nombre es muy largo", 
			   nombrev:"Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( ).Nota. Los paréntesis no se incluyen en caracteres permitidos.",
			   apellidosv:"el apellido no es correcto"
			   },
		    ap_paterno : {
				required: "El apellido es requerido",
				apellidosv:"letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( )."
				},
			ap_materno : {
				required: "El apellido es requerido",
				apellidosv:"letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, espacio ( )."
				},
			fecha_nac:{
				number:"Deve de ser numérico",
				fechav:"El formato de fecha es yyyymmdd"
				},
				colonia:{
				 required:"Colonia es requerido",
				 coloniav:"Únicamente acepta los siguientes caracteres letras de A-Z (mayúsculas y  sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), coma (,), punto (.), dos puntos (:), diagonal (/), guión medio(-), paréntesis ( )."
				 },
				 calle:{
					 required:"Calle es requerido",
					 sinparentesis:"letras de A-Z (mayúsculas y  sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), coma (,), punto (.), dos puntos (:), diagonal (/)."
					 },
				num_ext:{
					required:"Numero exterior es requerido",
					sinparentesis:"letras de A-Z (mayúsculas y  sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), coma (,), punto (.), dos puntos (:), diagonal (/), guión medio(-)."
					},
				num_int:{
					required:"Numero interior es requerido",
					sinparentesis:"letras de A-Z (mayúsculas y  sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), coma (,), punto (.), dos puntos (:), diagonal (/), guión medio(-)."
					},
					cp:{
						required:"Código postal es requerido",
						codigopostal:"Introduce un código postal valido"
						},
					cpext:{
						required:"Código postal es requerido", 
						codigopostalext:"Introduce un código postal valido"
						},
					razon_social:{
						required:"La razón social es requerida",
						sinparentesis:"Únicamente acepta los siguientes caracteres: letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), gato (#), guión medio (-), punto (.), &, coma (,), guión bajo (_), @, apóstrofe (')."
						},
       
	   				fecha_constitucion:{
						required:"La fecha de constitución es requerida",
						},
					identificador_fideicomiso:{
						required:"El identificador es requerido",
						sinparentesis:"letras de A-Z (mayúsculas y sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), gato (#), guión medio (-), punto (.), &, coma (,), guión bajo (_), @, apóstrofe (')."
						},	
					num_tel:{
						required:"El numero de telefono es obligatorio", telefonov:"El numero de telefono no es valido"
						}
					
			}
			});

 
});
    </script> 
</div>
             
<script>
       $(document).ready(function() {
          
 
            $("select#tipo_persona.tipo_persona").change(function() {
                $("select#tipo_persona.tipo_persona option:selected").each(function(){
                    tipo_persona = $('#tipo_persona').val();
                    $.post("<?php echo base_url();?>index.php/persona_aviso/tipo_persona", {
                        tipo_persona : tipo_persona
                        }, function(data) {
                            $(".div_tipo_persona").html(data);
                           
                });
                
                });
        });
        
        });
    </script>    
<script>
 $(document).ready(function(){
     $( ".nav ul" ).removeClass('active');   
      $( ".nav ul:nth-child(2)" ).addClass( "active" );
      $('form#form_persona_aviso').validate({
           rules :{
                tipo_persona : {
                    required : true //para validar campo vacio
                   
                }
            }
      });
  });
     
</script>


