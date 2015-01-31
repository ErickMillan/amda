// ActionScript Remote Document
$(document).ready(function()
{
$("#mes_reportado").click(function () {
//saco el valor accediendo a un input de tipo text y name = nombre
valordmesreportado=$('input:text[name=mes_reportado]').val();

});
});


function mes_reporta(){//INICIO DE FUNCION
	
	cadena=document.getElementById("mes_reportado").value;
	a=cadena.substring(0,4);
	if(cadena.substring(4,5)==0){
		m=cadena.substring(4,6);
		}else{
			m=cadena.substring(4,6);
			}
	
	
	var f = new Date();
fecha=(f.getFullYear()+ "" + f.getMonth() +1) ;

	aactual=fecha.substring(0,4);
	mactual=fecha.substring(4,6);
	
	
	//alert(fecha);
	//alert(a);
	//alert(m);
	//alert(aactual);
	//alert(mactual);
	
	
	if(a>=aactual || a<=aactual){//VALIDA SI EL AÑO QUE INTRODUJERON ES MAYOR O MENOR AL AÑO EN CURSO
		
		if(a==2013){//valido si el año es igual a 2013
				if (m<=8){//valido si mes es menor a septiembre
					$("#mes_reportado").val(valordmesreportado);
					alert("La fecha introducida esta fuera del rango disponible");					
					}//fin septiembre
			}//fin de validacion año 2013
			
		 if(a>aactual){
			$("#mes_reportado").val(valordmesreportado);
					alert("La fecha introducida esta fuera del rango disponible");	
				
			}
		 if(a<aactual && a<2013){
			$("#mes_reportado").val(valordmesreportado);
					alert("La fecha introducida esta fuera del rango disponible");	
				
			}
		 if(a==aactual){
				if(m>mactual){
					$("#mes_reportado").val(valordmesreportado);
					alert("La fecha introducida esta fuera del rango disponible");	
					}
				
				
			}
		}
		
		
	}//FIN DE FUNCION