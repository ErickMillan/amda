
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
                                </select></td>
                                