var filas=prompt("Selecciona un número de filas");
var columnas=prompt("Por último, un número de columnas");

var numero=1;

document.write("<table border=1 cellpadding=1>");
for(i=1;i<=filas;i++){ //creamos las filas con el for
    document.write("<tr>");
    for(m=1;m<=columnas;m++){ //creamos las columnas con otro for
        document.write("<td>"+numero+"</td>");
        numero+=2; //incrementa en dos el número, es decir, el número por donde empieza
    }
    	document.write("</tr>");
}
	document.write("</table>");