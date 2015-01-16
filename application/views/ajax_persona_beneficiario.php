<?php $tipo_persona = $tipo_p?>
<script>
       $(document).ready(function() {
                      
                    tipo_persona = <?php echo $tipo_persona;?>;
                   $.post("<?php echo base_url();?>index.php/beneficiario/datos/<?=$id_aviso.'/'.$id_beneficiario?>", {
                        tipo_persona : tipo_persona
                        }, function(data) {
                            $(".div_tipo_persona_beneficiario").html(data);
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
  
  $(document).ready(function(){
     $( ".nav .verul .veraddb .agregarb" ).removeClass('noseve');   
      $( ".nav .verul .veraddb .agregarb" ).addClass( "noseve" );
      
  });
     
</script>
