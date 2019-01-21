var mensaje=prompt("¡Bienvenid@! Introduce un mensaje");
document.write("<center><h1> "+mensaje+ "</h1></center>");

var imagen=prompt("Introduce el link de la imagen que quieres poner de perfil");
document.write("<center><p><img src='../../AppData/Local/Temp/Rar$DRa2272.11511/entrega JavaScript dia 22/"+imagen+"'></p></center>");

var datos=prompt("Introduce tu: Nombre, apellidos, dirección, teléfono y e-mail (separados por comas)");
var personales=datos.split(",");

document.write("<h2>Datos personales</h2>");
document.write("<ul>");

	for(var i=0; i<personales.length; i++){
    	document.write("<li>"+personales[i]+"</li>");
	}
	document.write("</ul>");

var titulos=prompt("¿Qué títulos tienes? Introdúcelos separados por comas");
var listaTitulos=titulos.split(",");

document.write("<h2>Formación</h2>");
document.write("<ol>");
for(i=0; i<listaTitulos.length; i++){
    document.write("<li> "+listaTitulos[i]+ "</li>");
document.write("</ol>");

document.write("<h2> Experiencia laboral </h2>");
var laboral=prompt("Dime donde has trabajado y desde que fecha hasta que fecha separado por comas");
						
var fecha=laboral.split(",");

document.write("<table border='1px'>");
for(i=0; i<=empresa.length; i++){

    let fecha=empresa[i].split(" ");

    document.write("<tr>"+
                    "<td>"+fecha[0]+"</td>"+
                    "<td>"+fecha[1]+"</td>"+
                    "</tr>");
}
document.write("</table>");