let bienvenida=prompt("Dime un titulo de bienvenida");
document.write("<h1 align='center'> "+bienvenida+ "</h1>");

let foto=prompt("Pon el enlace con tu foto");
document.write("<p align='center'><img src='"+foto+"'></p>");

let datos=prompt("Dime tu nombre, apellidos, direccion, telefono y email separados por comas");
let desordenada=datos.split(",");

document.write("<h2>Datos personales</h2>");
document.write("<ul>");
for(let i=0; i<desordenada.length; i++){
    document.write("<li>"+desordenada[i]+"</li>");
}
document.write("</ul>");

let formacion=prompt("Dime las titulaciones que tienes separadas por coma");
let ordenada=formacion.split(",");

document.write("<h2>Formación academica</h2>");
document.write("<ol>");
for(i=0; i<ordenada.length; i++){
    document.write("<li> "+ordenada[i]+ "</li>");
}
document.write("</ol>");

document.write("<h2> Experiencia laboral </h2>");
let laboral=prompt("Dime donde has trabajado y desde que fecha hasta que fecha separado por comas");
let empresa=laboral.split(" ");
let fecha=laboral.split(",");

document.write("<table border='1px'>");
// document.write("<tr>");
for(i=0; i<empresa.length; i++){
    
    document.write("<tr>"
                   +"<td>" +empresa[i]+ "</td>"
                   +"</tr>");

}
// document.write("</tr>");

// let fecha=laboral.split(",");
// document.write("<tr>");
for(let j=0; j<fecha.length; j++){

    document.write("<td>" +fecha[j]+ "</td>");

}
// document.write("</tr>");
// document.write("</table>");