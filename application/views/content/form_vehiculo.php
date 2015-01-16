
 <th colspan="4">Datos del veh&iacute;culo<?=$vehiculos;?></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Marca veh&iacute;culo:<span class="obligatorio"> * </span></td>
                            <td><?=$row_vehiculos->marca;//form_input($marca_fabricante)?></td>
                            td>Modelo:<span class="obligatorio"> * </span></td>
                            <td><?=form_input($modelo)?></td>
                        </tr>
                        <tr>
                            <td>A&ntilde;o:<span class="obligatorio"> * </span></td>
                            <td><?=form_input($anio)?></td>
                            <td>VIN:<span class="obligatorio"> * </span></td>
                            <td><?=form_input($vin)?></td>
                            
                        </tr>
                        <tr>
                            <td>Repuve:</td>
                            <td><?=form_input($repuve)?></td>
                            <td>Placas:</td>
                            <td><?=form_input($placas)?></td>
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
                                                    <option value="8">No Aplica</option>
                                                    
                             </select></td>
                              <!--  <td>
                                <input id="vehiculo_blindado_si" class="" type="radio" onclick="blindado_si()" name="vehiculo_blindado" value="si"<?php echo set_radio('vehiculo_blindado', 'si'); ?>>
                                <label>SI</label>
                            </td>
                            <td>
                                <input id="vehiculo_blindado_no" class="" type="radio" onclick="blindado_no()" name="vehiculo_blindado" value="no"<?php echo set_radio('vehiculo_blindado', 'no'); ?>>
                                <label>NO</label>
                            </td>
                            <td>
                                <div id="blindado">
                                    
                                </div>
                            </td>-->