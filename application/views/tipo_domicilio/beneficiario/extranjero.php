 <table class="table table-striped table_amda">
     <thead>
     <th colspan="4">Domicilio Extranjero</th>
     </thead>
     <tbody>
         <tr>
             <td>Pa&iacute;s : <span class="obligatorio"> * </span></td>
             <td>
                 <select id="pais_nacimiento" name="pais_nacimiento" class="form-control">
                     <option selected value="0">Selecciona una opci&oacute;n</option>
                     <?php foreach ($clave_pais->result() as $row_clave_pais){?>
                     <option value="<?=$row_clave_pais->id_clave?>"><?=$row_clave_pais->descrip?></option>
                     <?php  }?>
                 </select>
             </td>
             <td>Estado o provincia : <span class="obligatorio"> * </span></td>
             <td><?php echo form_input($estado);?></td>
            
         </tr>
         <tr>
             <td>Ciudad : <span class="obligatorio"> * </span></td>
             <td><?php echo form_input($ciudad);?></td>
             <td>Colonia : <span class="obligatorio"> * </span></td>
             <td><?php echo form_input($colonia);?></td>
         </tr>
         <tr>
             <td>Calle : <span class="obligatorio"> * </span></td>
             <td><?php echo form_input($calle);?></td>
             <td>C&oacute;digo postal : <span class="obligatorio"> * </span></td>
             <td><?php echo form_input($cp);?></td>
            
         </tr>
         <tr>
                <td>N&uacute;mero exterior : <span class="obligatorio"> * </span></td>
                <td><?php echo form_input($num_ext);?></td>
                <td>N&uacute;mero interior : <span class="obligatorio"> * </span></td>
                <td><?php echo form_input($num_int);?></td>
         </tr>
     </tbody>
</table>
<table class="table table-striped table_amda">
    <thead>
    <th colspan="4">Tel&eacute;fono</th>
    </thead>
    <tbody>
        <tr>
            <td>Clave del pa&iacute;s : <span class="obligatorio"> * </span></td>
            <td><select id="lada" name="lada" class="form-control">
                    <option selected value="">Selecciona una opci&oacute;n</option>
                     <?php foreach ($clave_pais->result() as $row_clave_pais){?>
                     <option value="<?=$row_clave_pais->id_clave?>"><?=$row_clave_pais->descrip?></option>
                     <?php  }?>
                 </select></td>
                 <td>N&uacute;mero telef&oacute;nico : <span class="obligatorio"> * </span></td>
            <td><?php echo form_input($num_tel);?></td>
        </tr>
        <tr>
            <td> Correo electr&oacute;nico :<span class="obligatorio"> * </span></td>
            <td><?php echo form_input($correo);?></td>
        </tr>
    </tbody>
</table>
 