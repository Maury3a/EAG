let filas=prompt("dime el numero de filas");
let columnas=prompt("dime el numero de columnas");
let contador=3;

document.write("<table border='1px'>");
for(let i=0; i<filas; i++){
    document.write("<tr>");

        for(let j=0; j<columnas; j++){
            document.write("<td>"+contador+"</td>");
            contador+=2;
    }
    document.write("</tr>");
    
}
document.write("</table>");