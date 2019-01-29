let datos=["nombre","apellido","email"];
let estado=["soltero","casado","divorciado"];
let hobbies=["deportes","cine","viajes"];

document.write("<ul>");
for(let i=0; i<datos.length; i++){
    document.write("<li>"+datos[i]+"</li>")
}
document.write("</ul>");

document.write("<select>");
document.write("<option value=''>elije una opcion</option>");
for(let i=0; i<estado.length; i++){
    document.write("<option value='"+estado[i]+"'>"+estado[i]+"</option>");
}
document.write("</select>");

document.write("<table border='1px'><tr>");
for(let i=0; i<hobbies.length; i++){
    document.write("<td>"+hobbies[i]+"</td>");
}
document.write("</tr></table>");