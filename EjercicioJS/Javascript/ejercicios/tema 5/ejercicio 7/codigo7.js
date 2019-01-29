document.write("<h1 align='center'>Tienda de albunes de musica</h1>");


for(let i=0; i<tienda.length; i++){
    
    if(tienda[i]["pais"]=="UK"){
    
    document.write("<div class='item'>"+
                   "<h2>Titulo del albun:<span> "+tienda[i]["titulo"]+"</span></h2>"+
                   "<h3>Cantante:<span> "+tienda[i]["artista"]+"</span></h3>"+
                   "<img src='https://images-na.ssl-images-amazon.com/images/I/81y9gleE%2BDL._SX425_.jpg'>"+
                   "<p>Discografica:<span> "+tienda[i]["discografica"]+"</span></p>"+
                   "<p>Precio:<span> "+tienda[i]["precio"]+"</span></p>"+
                   "<p>Publicado:<span> "+tienda[i]["publicacion"]+"</span></p>"+
                   "<img src='"+tienda[i]["caratula"]+"'>"+
                   "</div>");
    }
    else if(tienda[i]["pais"]=="USA"){
        document.write("<div class='item'>"+
        "<h2>Titulo del albun:<span> "+tienda[i]["titulo"]+"</span></h2>"+
        "<h3>Cantante:<span> "+tienda[i]["artista"]+"</span></h3>"+
        "<img src='https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg'>"+
        "<p>Discografica:<span> "+tienda[i]["discografica"]+"</span></p>"+
        "<p>Precio:<span> "+tienda[i]["precio"]+"</span></p>"+
        "<p>Publicado:<span> "+tienda[i]["publicacion"]+"</span></p>"+
        "<img src='"+tienda[i]["caratula"]+"'>"+
        "</div>");

    }
    else if(tienda[i]["pais"]=="España"){
        document.write("<div class='item'>"+
        "<h2>Titulo del albun:<span> "+tienda[i]["titulo"]+"</span></h2>"+
        "<h3>Cantante:<span> "+tienda[i]["artista"]+"</span></h3>"+
        "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Spain_%28Civil%29.svg/200px-Flag_of_Spain_%28Civil%29.svg.png'>"+
        "<p>Discografica:<span> "+tienda[i]["discografica"]+"</span></p>"+
        "<p>Precio:<span> "+tienda[i]["precio"]+"</span></p>"+
        "<p>Publicado:<span> "+tienda[i]["publicacion"]+"</span></p>"+
        "<img src='"+tienda[i]["caratula"]+"'>"+
        "</div>");
    }

    

}