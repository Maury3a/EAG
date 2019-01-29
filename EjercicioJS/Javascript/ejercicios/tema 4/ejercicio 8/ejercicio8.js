let datos=prompt("dime tus datos separados por espacio");
let datos1=datos.split(" ");

document.write("<ul>");
for(let i=0; i<datos1.length; i++){
    document.write("<li>"+datos1[i]+"</li>");
}
document.write("</ul>");