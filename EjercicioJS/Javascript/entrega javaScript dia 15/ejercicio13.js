var filas=prompt("Escribe el numero de filas");
var columnas=prompt("Escribe el numero de columnas");

var contador=1;

document.write("<table border='1px'>");
for(var i=1; i<=filas;i++){//el primero bucle centa las filas
    if(i%2==0){
        document.write("<tr style='background-color:red'>");
        for(var j=1;j<=columnas;j++){  
            document.write("<td> "+contador+"</td>"); //el segundo crea los td
            contador++;
        }
        document.write("</tr>");
    }else if(i%2!=0){
        document.write("<tr style='background-color:green'>"); //sirve para crear las filas verdes
        for(var j=1;j<=columnas;j++){
            document.write("<td> "+contador+" </td>");
            contador++;
        }
        document.write("</tr>");
    }
}
document.write("</table>");