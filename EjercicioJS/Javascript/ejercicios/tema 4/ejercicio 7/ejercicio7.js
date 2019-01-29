let datos=prompt("dime tus datos separado por coma");
let estado=prompt("dime tu estado separado por coma");
let hobbies=prompt("dime tus hobies separado por coma");

let datos1=datos.split(",");
let estado1=estado.split(",");
let hobbies1=hobbies.split(",");

document.write("<ul>");
for(let i=0; i<datos1.length; i++){
    document.write("<li>"+datos1[i]+"</li>")
}
document.write("</ul>");

document.write("<select>");
document.write("<option value=''>elije una opcion</option>");
for(let i=0; i<estado1.length; i++){
    document.write("<option value='"+estado1[i]+"'>"+estado1[i]+"</option>");
}
document.write("</select>");

document.write("<table border='1px'><tr>");
for(let i=0; i<hobbies1.length; i++){
    document.write("<td>"+hobbies1[i]+"</td>");
}
document.write("</tr></table>");