let filas=prompt("dime un numero de filas");
let columnas=prompt("dime un numero de columnas");
let contador=1;

document.write("<table border='1px'>");
for(let i=1; i<=filas; i++){
    document.write("<tr>");
    for(let j=1; j<=columnas; j++){
        if(contador%2==0){
            document.write("<td style='background-color:yellow'>"+contador+"</td>");
            contador++;
        }else{
            document.write("<td style='background-color:green'>"+contador+"</td>");
            contador++;
        }
    }
    document.write("</tr>");
}
document.write("</table>");