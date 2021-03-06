<div id="page-wrapper">
<?php
//echo "id = ".$id_usuario;
//echo "name =".$usuario;

?>
   <?php
                    $att_form=array('name'=>'formDatosAviso','id'=>'formDatosAviso');
                    echo form_open(base_url().'index.php/distribuidor/guardardatosaviso',$att_form);
                 ?>
        <div class="content-header">
            <h3 class="icon-head head-products">Datos Generales aviso</h3>
            <div class="content-buttons-placeholder"style="width: 0px; height: 15px;">
                <p class="content-buttons form-buttons">
                    
                    <!--<button type="button" id="addmodificatorio" class="scalable save" onclick="agregarmodificatorio();" style="">
                        <span>Agregar modificatorio</span>
                    </button>-->
                    
                </p>
            </div>
        </div>
        <div class="middle-container">
            <div class="entry-edit">
                <div class="entry-edit-head">
                    <h4 class="icon-head head-customer-view"><?php echo $subtitle;?></h4>
                </div>

            </div>
            <fieldset>
                <table class="table table-striped">
                    <thead>
                        <tr><th>Datos de identificaci&oacute;n de quien realiza la actividad vulnerable</th></tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos_usuario->result() as $rowdatosuser){?>
                        <tr>
                    <div class="form-group">
                        <td>Nombre, denominaci&oacute;n o raz&oacute;n social :</td>
                        <td><input disabled class="form-control" type="text" placeholder="<?=$rowdatosuser->display_name;?>"></td>
                    </div>   
                    </tr>
                        <tr>
                            <td>
                               Clave de quien realiza la actividad vulnerable :
                            </td>
                            <td>
                               <input disabled class="form-control" type="text" placeholder="<?=$rowdatosuser->rfc;?>"> 
                            </td>
                        </tr>
                        <tr>
                            <td>Clave de la actividad vulnerable :</td>
                            <td><input disabled class="form-control" type="text" placeholder="VEH"> </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <?php
                    //$att_form=array('name'=>'formDatosAviso','id'=>'formDatosAviso');
                    //echo form_open(base_url().'index.php/distribuidor/guardardatosaviso',$att_form);
                 ?>
               
                <?=validation_errors('<div class="status_box warning"><h6>Advertencia</h6><ul><li>','</li></ul></div>'); ?>
                 
                <table id="datosgeneralesaviso" class="table table-striped">
                     <thead>
                        <div class="highlight">
                            INSTRUCCIONES : Capture todos los datos que se soliciten. En caso de que el aviso sea modificatorio deber&aacute; capturar el numero de folio as&iacute; como el motivo de modificaci&oacute;n 
                        </div>
                    </thead>
                    
                    <tbody>
                        <tr id="modificatorio"></tr>
                        <tr>
                            <td>Mes a reportar: <span class="obligatorio"> * </span></td>
                            <td><input class="form-control"  value="<?php echo set_select("mes_reportado"); ?>" id="mes_reportado" type="text" placeholder="Ingrese mes a reportar en formato AAAAMM"  name="mes_reportado" data-toggle="tooltip" data-placement="top" title="Formato AAAAMM , Longitud de 6 digitos" onchange="mes_reporta()"></td>
                    
                        </tr>
                        
                        <tr>
                            <td>Referencia del aviso :<span class="obligatorio"> * </span></td>
                            <td>
                              
                                <input class="form-control" name="referencia_aviso"  value="<?php echo set_value("referencia_aviso"); ?>" type="text" placeholder="Referencia del aviso" data-toggle="tooltip" data-placement="top" title="La longitud mínima es de 1 caracter y la máxima es de 14.">
                            </td>
                        </tr>
                        <tr>
                            <td>Prioridad del aviso : <span class="obligatorio"> * </span></td>
                            <td>
                                <select id="select_prioridad" class="form-control" name="prioridad_aviso">
                                    <option value="" <?php echo set_select('prioridad_aviso', '', TRUE); ?>>Selecciona una opcion</option>
                                    <option value="1" <?php echo set_select('prioridad_aviso', '1'); ?>>Normal</option>
                                    <option value="2" <?php echo set_select('prioridad_aviso', '2'); ?>>24 hrs</option>
                                </select>
                            </td>
                        </tr>   
                        <tr>
                            <td>
                               Selecciona el tipo de alerta : <span class="obligatorio"> * </span>
                            </td>
                            <td>
                                <select   id="select_tipoalerta" style="font-size:10px" name="tipo_alerta" class="form-control">
                                    <option  value="" <?php echo set_select('tipo_alerta', '', TRUE); ?>>Seleccione un tipo alerta</option>
                                            <?php foreach ($alerta->result() as $row) {?>
                                            <option value="<?php echo $row->idalerta;?>"<?php echo set_select('tipo_alerta',''.$row->idalerta.''); ?>><?php echo $row->descripcion_alerta;?></option>
                                            <?php }?>
                                </select> 
                            </td>
                        </tr>
                        <tr id="alerta_otro">
                             
                         </tr>
                    </tbody>
                      <?=form_hidden('token',$token)?>
                     
                </table>
                 <?=form_close()?>   
            </fieldset>
            <button  type="submit" id="save" class="scalable save gradient" onclick="wait()" style="">
                        <span>Guardar y continuar</span>
                    </button>
        </div>
    
    <!-- Modal -->

</div><!-- /.modal -->
    
  <script type="text/javascript">
      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
 
$("#mes_reportado").focus();  


$(function(){

	$.validator.addMethod('solocaracteresnumeros', function(value, element)
	{
		return this.optional(element) || /^[a-z0-9]+$/i.test(value);
		
	
	});
	
	$.validator.addMethod('latinos', function(value, element)
	{
		return this.optional(element) || /^[,ñ\.:\/'\$-a-z ]+$/i.test(value);
		
	
	});
	
	

    $('#formDatosAviso').validate({
       rules : {
           mes_reportado :{required :true,minlength : 6,maxlength : 7,number : true},
        referencia_aviso :{required:true,minlength:1,maxlength:14, solocaracteresnumeros:true},
         prioridad_aviso :{required:true},
             tipo_alerta :{required:true},
            descripcion_alerta:{required:true,minlength:1,maxlength:3000, latinos:true}
			
           },
       messages :{
           mes_reportado :{
                       required :  "Debe ingresar un mes a reportar",
                       minlength : "Debe tener el formato AAAAMM",
                       maxlength : "Debe tener el formato AAAAMM",
                       number : "El campo debe contener solo numeros",
					   
                   },
        referencia_aviso :
                    {
                       required : "Ingresa una referencia para el aviso" ,
                       minlength : "Minimo 1 caracter",
                       maxlength: "Maximo 14 caracteres",
                        solocaracteresnumeros : "solo caracteres de a-z y numeros de 0-9"
                    },
         prioridad_aviso :{required:"La prioridad del aviso es requerida"},    
             tipo_alerta :{required:"El tipo de alerta es requierido"},
       descripcion_alerta:
	   					{
							required:"Ingrese una descripci&oacute;n de alerta",
							minlength:"el minimo de caracteres es 1",
							maxlength:"el maximo de caracteres es de 3000",
							latinos:"Únicamente acepta los siguientes caracteres letras de A-Z (mayúsculas y  sin acentos ni diéresis), letra Ñ, números del 0-9, espacio ( ), coma (,), punto (.), dos puntos (:), diagonal (/), apóstrofe('), signo de pesos ($), guión medio (-). Nota: Los paréntesis no se incluyen en caracteres permitidos."
	   					    
							}
            }   
       
    });
});
</script>   
<script type="text/javascript">
 
    
    $(function(){
        
         $('input#mes_reportado').datepicker({
                showOn: 'button',
                buttonImage: '<?=base_url()?>assets/images/cal.gif',
                buttonImageOnly: true
                
         });
     $('input#mes_reportado').datepicker('option', {dateFormat: 'yymm',changeMonth: true,changeYear: true});     
      });  
</script>
<script>

$(document).ready(function(){
  $("#select_prioridad").change(function(){
     tipo_aviso = $("#select_prioridad").val();
     if(tipo_aviso == '2')
    {
     $("#select_tipoalerta option[value='']").prop('disabled',false);
    //  $("select#select_tipoalerta ").prop({'disabled':true});
      
    //  alert("entra 1");
      select_tipoalerta
    }
    
    if(tipo_aviso == '1'){
      
       $("select#select_tipoalerta option[value='100']").prop({'selected':'true'});
      //alert("entra 2");
    }
  });
});


</script>

