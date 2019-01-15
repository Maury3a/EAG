var filas=prompt("Escribe el numero de filas");
var columnas=prompt("Escribe el numero de columnas");

var numero=1;

document.write("<table border='1px'>");
for(i=1;i<=filas;i++){ //creamos las filas con el for
    document.write("<tr>");
    for(m=1;m<=columnas;m++){ //creamos las columnas
        document.write("<td>"+numero+"</td>");
        numero++; 
    }
    document.write("</tr>");
}
document.write("</table>");