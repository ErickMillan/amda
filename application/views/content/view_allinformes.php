<div id="page-wrapper">
    <div id="fuel_main_top_panel"></div>
    <div class="clear"></div>
    <div id="amda_actions">
      <div id="filters">
	<table cellspacing="0" cellpadding="0" border="0">
		<tbody>
		     <tr>
			<td>
			<div id="form_537fcd2601115" class="more_filters">
                        <div>
        <div class="actions">
            <div class="actions_inner"></div>
                
        </div>
</div>
</div>
        <script charset="utf-8" type="text/javascript" src="http://amda.gsinlimites.com.mx/assets/js/jquery-migrate-1.1.1.js"></script>
	<script charset="utf-8" type="text/javascript" src="http://amda.gsinlimites.com.mx/assets/js/jquery.formbuilder.js"></script>
	<script charset="utf-8" type="text/javascript" src="http://amda.gsinlimites.com.mx/assets/js/custom_fields.js"></script>
	<script type="text/javascript">
//&lt;![CDATA[

if (jQuery){ jQuery(function(){if (jQuery.fn.formBuilder) {if (typeof(window['formBuilderFuncs']) == "undefined") { window['formBuilderFuncs'] = {}; };window['formBuilderFuncs'] = jQuery.extend(window['formBuilderFuncs'], []);jQuery("#form_537fcd2601115").formBuilder(window['formBuilderFuncs']);jQuery("#form_537fcd2601115").formBuilder().initialize();}})}
//]]&gt;
</script>
		</td>
		<!--<td><a class="reset" href="#"></a></td>
		<td>
			<div class="search_input">
			<input type="search" placeholder="Buscar..." value="" id="search_term" name="search_term">											</div>
		</td>
		<td class="search"><input type="submit" value="Buscar" id="search" name="search"></td>
		<td class="show"><label for="limit">Ver:</label> 
                    <select id="limit" name="limit">
                        <option selected="selected" label="50" value="50">50</option>
                        <option label="100" value="100">100</option>
                        <option label="200" value="200">200</option>
                    </select>
                </td>-->
	</tr>
	</tbody>
	</table>
</div>
        <div id="action_btns" class="buttonbar">

	<ul>
           <!-- <li>
                <a class="ico ico_select_all" href="#">Selecciona Todos</a>
            </li>-->
            <li style="display: none;">
                <a id="multi_delete" class="ico ico_delete" href="#">Eliminar varios</a>
            </li>
            <li class="end">
                <a class="ico ico_create" href="<?=  base_url('index.php/informes_amda/')?>">Ver informes del periodo actual</a>
            </li>
        </ul>
	
	
</div>
    </div>
    <div id="amda_notification"></div>
    <div id="amda_main_content">
        
   <table class="table table-striped tabla ">
                    <thead>
                        <tr>
                           <th class="column-check"><input class="check-all" type="checkbox" /></th>
                            
                            <th>Mes reportado</th>
                            <th>Modificar</th>
                            <th>Referencia aviso</th>
                            <th>Prioridad</th>
                            <th>Archivo XML</th>
                            <th>Fecha de modificaci&oacute;n</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php
                            if ($lista_informes)
                                {
                                foreach ($lista_informes as $rowavisos){
                                ?>
                                <tr>
                                    <td class="column-check"><input  name ='id_aviso' value="<?php echo $rowavisos->idaviso;?> " class="check-all" type="checkbox" /></td>  
                   
                    <td><?php echo $rowavisos->mes_reportado;?> </td>
                     <td>
                         <a class="editar" href="<?=base_url('index.php/datos_aviso/index/'.$rowavisos->idaviso)?>">
                             <i class="fa fa-edit" style="color:#ED7D33"></i> Modificar
                        </a>
                         
                     </td>
                  
                    <td><?php echo $rowavisos->referencia;?> </td>
                    <td><?php echo $rowavisos->prioridad;?> </td>
                    <td>
                        <a href="<?=  base_url('index.php/createxml/index/'.$rowavisos->idaviso)?>">
                            <i class="fa fa-file-text" style="color:#2C752C"></i> Crear Xml
                        </a>
                    </td>
                    
                    <td>
                        <?php 
                          //  echo "daos del ".$is_modific[$rowavisos->idaviso]->num_rows();
                                   foreach ($is_modific[$rowavisos->idaviso]->result() as $key){
                                     //   foreach($key->result() as $value){
                                         echo $key->fecha_modificacion;   
                                       }
                           // }?>
                    </td>
                    </tr>
                   
                             <?php
                                
                                }
                                }else
                                    {
                             
                                    ?>
                      <tr>  
                    <td colspan="6">
                        <div class="avisos_vacio">
                            Aun no se han registrado avisos para este mes haga click en en bot&oacute;n crear nuevo aviso.
                        </div>    
                        
                        </td>
                         </tr>
                                <?php
                                    
                                    }
                                ?>
                        
                    </tbody>
                </table>
			
			
			<!-- BODY -->
			
<!-- list view -->
<div id="list_container">
	<div id="data_table_container">
    
<input type="hidden" value="0" id="offset" name="offset"><input type="hidden" value="asc" id="order" name="order"><input type="hidden" value="email" id="col" name="col"></div>
	<div id="table_loader" class="loader" style="display: none;"></div>
</div>

<?php 

?>

<div class="clear"></div>			
<input type="hidden" value="0" id="fuel_inline" name="fuel_inline">
        
        </div>
        <div class="pagination"><?=$this->pagination->create_links()?></div>
    </div>
</div>

