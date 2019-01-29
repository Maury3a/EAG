let filas=prompt("dime el numero de filas");
let columnas=prompt("dime el numero de columnas");
let contador=1;


document.write("<table border='1px'>");
for(let i=1; i<=filas; i++){
    if(i%2==0){
        document.write("<tr style='background-color:green'>");
        for(let j=1; j<=columnas; j++){
            document.write("<td>"+contador+"</td>");
            contador++;
        }
        document.write("</tr>");
                       
    }else{
        document.write("<tr style='background-color:red'>");
        for(let j=1; j<=columnas; j++){
            document.write("<td>"+contador+"</td>");
            contador++;
    }
    document.write("</tr>");
}
}
document.write("</table>");