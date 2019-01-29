let coche=prompt("dime la marca de tu coche");
if(coche=="ford"){
    document.write("<h2>Nacionalidad Estado Unidense</h2><img src='https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg'>");
}else if(coche=="bmw"){
    document.write("<h2>Nacionalidad Alemana</h2><img src='http://flags.fmcdn.net/data/flags/w580/de.png'>");
}else if(coche=="peugeot"){
    document.write("<h2>Nacionalidad Francesa</h2><img src='https://upload.wikimedia.org/wikipedia/commons/c/c3/Flag_of_France.svg'>");
}else{
    alert("error");
}