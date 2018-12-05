let dia, mes, ano;
dia=parseFloat(prompt("Introduce el día"));
mes=parseFloat(prompt("Introduce el mes"));
ano=parseFloat(prompt("Introduce el año"));
validez=validar(dia,mes,ano);
alert("La fecha "+validez);
function validar(dia,mes,ano){

if(dia>31||dia<1||mes>12||mes<1||ano>2018||ano<1900){ //introducimos todas las variantes no válidas
return "no es válida";
	}else{
		return"válida";
	}	
}