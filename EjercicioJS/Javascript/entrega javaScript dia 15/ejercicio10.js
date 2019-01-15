var lenguajes=prompt("¿Qué lenguajes conoces?");
var datos=lenguajes.split(" ");

document.write("<table border='1px'>");
document.write("<tr style=background-color:green>");
for(i=0;i<datos.length;i++){
    document.write("<td>"+datos[i]+"</td>");
}
document.write("</tr>");
document.write("</table>");