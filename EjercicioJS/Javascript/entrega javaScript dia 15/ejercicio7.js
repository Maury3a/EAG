var datos=prompt("Nombre, apellidos y email (separado por comas)");
var estado=prompt("Aquí debes escribir soltero, casado, divorciado y viudo (separado por comas)");
var hobby=prompt("Expresa tus hobbies, separados por comas");

var usuario=datos.split(",");
var estadoCivil=estado.split(",");
var aficiones=hobby.split(",");

document.write("<ul>");
	for(i=0;i<usuario.length;i++){ //hacemos un bucle para cada elemento
    document.write("<li>"+usuario[i]+"</li>");
}
		document.write("</ul>");

document.write("<select>");
	for(i=0;i<estadoCivil.length;i++){ //para los estados civiles
    document.write("<option value='"+estadoCivil[i]+"'>"+estadoCivil[i]+"</option>");
}
document.write("</select>");document.write("<br>");

document.write("<table border=1px cellpadding=1>"); //creamos la tabla
	for(i=0;i<aficiones.length;i++){// hacemos este for para los hobbies
    document.write("<tr><td>"+aficiones[i]+"</td></tr>");
}
document.write("</table>");
