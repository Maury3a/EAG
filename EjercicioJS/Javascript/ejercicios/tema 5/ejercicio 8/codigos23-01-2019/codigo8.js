document.write("<h1 align='center'> Lugares turisticos de España</h1>");

for(let i=0;i<lugares.length;i++){
    document.write("<div class='item'>"+
                "<h1>"+lugares[i]["city"]+"</h1>"+
                "<h2>"+lugares[i]["description"]+"</h2>"+
                "<p>Latitud:"+lugares[i]["latitude"]+"</p>"+
                "<p>Longitud:"+lugares[i]["longitude"]+"</p>"+
                "<img src='"+lugares[i]["foto"]+"'>"+
                "<a href='"+lugares[i]["visitar"]+"'>Ver en Mapa</a>"+
                "</div>");
}