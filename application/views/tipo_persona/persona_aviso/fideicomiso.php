<table class="table table-striped table_amda">
     <thead>
     <th colspan="4">Fideicomiso</th>
     </thead>
     <tbody>
         <tr>
             <td>Denominaci&oacute;n fiduciario : <span class="obligatorio"> * </span></td> 
             <td><?php echo form_input($razon_social);?></td>
             <td>RFC : <span class="obligatorio"> * </span></td>
             <td><?php echo form_input($rfc_fideicomiso);?><label id="trfc"></label></td>
            
         </tr>
         <tr>
             <td>Identificador Fideicomiso :</td>
             <td><?php echo form_input($identificador_fideicomiso);?></td>
         </tr>
                                
     </tbody>
     
                                   
         <thead>
            <th colspan="4">Apoderado Delegado</th>
         </thead>
         <tbody>
         <tr>
             <td>Nombre : <span class="obligatorio"> * </span></td>
              <td><?php echo form_input($nombre);?></td>
             <td>Apellido Paterno : <span class="obligatorio"> * </span></td>
             <td><?php echo form_input($ap_paterno);?></td>
         </tr>
          <tr>
             <td>Apellido Materno : <span class="obligatorio"> * </span></td>
             <td><?php echo form_input($ap_materno);?></td>
             <td>Fecha Nacimiento :</td>
             <td><?php echo form_input($fecha_nac);?></td>
         </tr>
          <tr>
             <td>RFC :</td>
            <td><?php echo form_input($rfc);?></td>
             <td>CURP :</td>
             <td><?php echo form_input($curp);?></td> 
         </tr>
          
        
         
          
         </tbody>
    
</table>
 <hr style=" border-color: #E1E1E8 -moz-use-text-color -moz-use-text-color;">
 <label>Tipo de domicilio</label>
                <br>
                <select id='selecttipo_domicilio' class='selecttipo_domicilio form-control requerido' name='selecttipo_domicilio'>
                    <option selected value='0'>Selecciona un tipo de domicilio</option>
                    <option value='1'>Nacional</option>
                    <option value='2'>Extranjero</option>
                    
                    
                </select>
 <hr style=" border-color: #E1E1E8 -moz-use-text-color -moz-use-text-color;">
                <div class="div_tipo_domicilio">
                    
                </div>
<script>
       $(document).ready(function() {
            $("select#selecttipo_domicilio.selecttipo_domicilio").change(function() {
                $("select#selecttipo_domicilio.selecttipo_domicilio option:selected").each(function(){
                    tipo_domicilio = $('#selecttipo_domicilio').val();
                    $.post("<?php echo base_url();?>index.php/persona_aviso/tipo_domicilio", {
                        tipo_domicilio : tipo_domicilio
                        }, function(data) {
                            $(".div_tipo_domicilio").html(data);
                });
                
                });
        });
         $( "select#tipo_identificacion" ).change(function() {
var valor_identificacion=$("select#tipo_identificacion option:selected").val();
    if(valor_identificacion == "11" || valor_identificacion == "12" || valor_identificacion == "13")
    {
         $("#identificacion_otro").empty(); 
        $("#identificacion_otro").append("<td>Descripci&oacute;n de Identificaci&oacute;n</td><td><textarea name='descripcion_identificacion' value='<?php echo   set_value('descripcion_identificacion'); ?>' class='requerido form-control' placeholder='Introduce una descripci&oacute;n de la identificaci&oacute;n' id='descripcion_identificacion'></textarea></td>"); 
    
    }else
    {
        $("#identificacion_otro").empty(); 
    }
});
        
        });
$(document).ready(function() {
$( "input#fecha_nacimiento" ).datepicker({
                showOn: 'button',
                buttonImage: '<?=base_url()?>assets/images/cal.gif',
                buttonImageOnly: true
                });
  $('input#fecha_nacimiento').datepicker('option', {dateFormat: 'yymmdd',changeMonth: true,changeYear: true,yearRange: '-100:+0'}); 
   $( "input#fecha_nacimiento" ).datepicker( "setDate", "<?php if(isset($fecha_datepicker) && $fecha_datepicker != NULL){echo $fecha_datepicker;}?>");

<?php 

if(isset($actualizar_datos) && $actualizar_datos != NULL){
    echo $actualizar_datos;
} 
?>
});

    </script>  
    <?php if (isset($identificacion) && $identificacion != NULL ){?>
    
    <script>
        $(document).ready(function(){
            
            $('#tipo_identificacion option[value= "<?php echo $identificacion;?>" ]').attr({'selected':'true'});
            $('#tipo_identificacion').prop('disabled','disabled');
          
        });
        
        
    </script>
    
    <?php } ?>
<?php if (isset($tipo_domicilio1) && $tipo_domicilio1 != NULL ){?>
    <script>
        $(document).ready(function(){
            $('select#selecttipo_domicilio.selecttipo_domicilio option[value= "<?php echo $tipo_domicilio1;?>" ]').attr({'selected':'true'});
               // $("select#selecttipo_domicilio.selecttipo_domicilio option:selected").each(function(){
                    tipo_domicilio = $('#selecttipo_domicilio').val();
                    $.post("<?php echo base_url();?>index.php/persona_aviso/tipo_domicilio", {
                        tipo_domicilio : tipo_domicilio
                        }, function(data) {
                            $(".div_tipo_domicilio").html(data);
                });
                
                //});
            // $('select#selecttipo_domicilio.selecttipo_domicilio').prop('disabled','disabled');
           
        });
        
    </script>
    <?php } ?>