<div id="page-wrapper">
    <div id="fuel_main_top_panel"></div>
    <div class="clear"></div>
    <?= form_open('add_distribuidor/save_distribuidor',$attrib_form)?>
    <div id="amda_actions">
     
        <div id="action_btns" class="buttonbar">

	
                <h4 class="ico ico_users">Alta  > Distribuidor</p>
                <!--<a class="ico ico_save" href="<?//=  base_url('index.php/users/create')?>">Guardar</a>-->
        
	
	
</div>
    </div>
    <div id="amda_notification"></div>
    <div id="amda_main_content">
        <div id="amda_main_content_inner">
            <p class="instructions">Aqu&iacute; puede gestionar los datos para los diferentes distribuidores.</p>
            <div id="form_users" class="form">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>
                                <?=  form_hidden('id_distribuidor',$id_distribuidor)?>
                                <?=  form_label('Nombre o Razon Social','inp_razon_social')?>
                                <span class="required">*</span>
                            </td>
                            <td>
                                <?=  form_input($inp_razon_social)?>
                                <label class="error"><?php echo form_error('inp_razon_social'); ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td><?=  form_label('E-mail','email')?>
                                <span class="required">*</span>
                            </td>
                        <td>
                            <?=  form_input($inp_email)?>
                            <label class="error"><?php echo form_error('email'); ?></label>
                        </td>
                        </tr>
                        <tr>
                            <td><?=  form_label('RFC','rfc')?>
                                <span class="required">*</span>
                            </td>
                            
                        
                    <td>
                        <?=  form_input($inp_rfc)?>
                            <label class="error"><?php echo form_error('rfc'); ?></label><label id="trfc"></label>
                       
                       </td>
                        </tr>
                        <tr>
                            
                            <td>
                                <div class="actions_inner">
                                    <input id="save" class="submit" type="submit" value="Guardar" name="Guardar">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="required" colspan="2"><span class="required">*</span> Campos requeridos</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
			
			
			<!-- BODY -->
			


<?php 

?>

<div class="clear"></div>			

        
        </div>-
        
    </div>
</div>
<script>
  
$(function(){
    
    
    $('#form_newuser').validate({
       rules : {
          inp_razon_social : {required :  true},
              email : {required:true,checkmail:true},
                rfc : {required:true} 
          
       },
       
       messages :{
           inp_razon_social :
                   {
                       required :  "Debe ingresar un nombre de la razon social",
                       
                   },
              email :
                    {
                       required : "Debe ingresar un correo valido" 
                    },
                rfc :
                    {
                        required :"Debe ingresar un RFC"
                    },
          
         
       
       }
    });
    
}); 
</script>

<?php if(isset($update_user) && $update_user == TRUE){?>
<script>
    $(document).ready(function() {
        $(".ico_users").empty().html("Actualizar datos de usuario");
        $("#save").attr('value','Actualizar');
        $(".actions_inner").append('<input type="button" class="cancel" value="Cancelar" id="Cancel" name="Cancel" onclick ="history.back(-1);">');
        $("#form_newuser").attr('action','http://amda.gsinlimites.com.mx/index.php/add_distribuidor/update'); 
       // $('#role option[value= "<?//=$permisos;?>" ]').attr({'selected':'true'});
        //$("#tdpassword").empty().html("<label for='password'>Nuevo Password</label><span class='required'>*</span>");

        
    });
</script>
    <?php }?>
