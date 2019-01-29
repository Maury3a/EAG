let lenguajes=prompt("dime cuantos lenguajes sabes");
let lenguajes1=lenguajes.split(",");

document.write("<table border='1px'><tr>");
for(let i=0; i<lenguajes1.length; i++){
    document.write("<td>"+lenguajes1[i]+"</td>");
}
document.write("</tr></table>");