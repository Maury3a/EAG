let datos=prompt("Lenguajes que conoces separados por comas");
let lenguajes=datos.split(",");

for(let i=0;i<lenguajes.length;i++){
    document.write("<input type='button' value='"+lenguajes[i]+"'></input>");
}
