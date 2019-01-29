let datos=prompt("dime tus lenguajes de programacion separado por espacio");
let datos1=datos.split(" ");

for(let i=0; i<datos1.length; i++){
    document.write("<button type='submit'>"+datos1[i]+"</button>");

}