<!-- Modal -->
 <div class="modal-dialog" style="width: 800px">
     <form class="form-horizontal"  id="form_veh" method="post" action="<?php echo base_url().'index.php/operaciones/SaveVehiculo/'?>">
        
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">
            <div class="panel-heading">
                <h5 class="text-info">AGREGAR NUEVO VEHICULO</h5>
            
            </div>
        </h4>
      </div>
          
      <div class="modal-body">
          <?=  form_hidden('datos_operacion',$this->session->userdata('datos_operacion'))?>
         <?php //print_r($this->session->all_userdata()) ?>
          <div style="margin:30px;"></div>
          <div class="form-group">
              <table class="table table-striped">
                  
                                                                <thead>
                                <th colspan="4">Datos del veh&iacute;culo</th>
                                </thead>
                                <tbody>
                                <tr>
                                <td>Marca veh&iacute;culo:<span class="obligatorio"> * </span></td>
                                <td><?=form_input($marca_vehiculo)?></td>
                                <td>Modelo:<span class="obligatorio"> * </span></td>
                                <td><?=form_input($modelo_vehiculo)?></td>
                                </tr>
                                <tr>
                                <td>A&ntilde;o:<span class="obligatorio"> * </span></td>
                                <td><?=form_input($anio_vehiculo)?></td>
                                <td>VIN:<span class="obligatorio"> * </span></td>
                                <td><?=form_input($vin_vehiculo)?></td>
                                </tr>
                                <tr>
                                <td>Repuve:</td>
                                <td><?=form_input($repuve_vehiculo)?></td>
                                <td>Placas:</td>
                                <td><?=form_input($placas_vehiculo)?></td>
                                </tr>
                                <tr>
                                <td> <label for='blindaje'> Nivel de Blindaje <span class='required'>*</span> </label></td>
                                <td><select class='form-control' id='nivel_blindaje' name='nivel_blindaje'>
                                <option selected='selected'>Selecione una opcion</option>
                                <option value='1'>NIVEL A</option>
                                <option value='2'>NIVEL B</option>
                                <option value='3'>NIVEL B PLUS</option>
                                <option value='4'>NIVEL C</option>
                                <option value='5'>NIVEL C PLUS</option>
                                <option value='6'>NIVEL D</option>
                                <option value='7'>NIVEL E</option>
                                <option value="9">No Aplica</option>
                                </select>
                                <?=form_hidden('id_aviso',$id_aviso)?>
                <?php if(isset($idoperacion) && $idoperacion != NULL){ echo form_hidden('id_operacion',$idoperacion);}?>
                
                <?=form_hidden('token',$token)?> 
                                </td>
              </tbody>
              </table>
         </div>
          
      </div>
          </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
       </form> 
    </div><!-- /.modal-content -->                             