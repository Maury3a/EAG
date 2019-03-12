// EJERCICIOS TEMA 6:

// La funcion ready ejecuta inicio cuando la página está cargada:

// $(document).ready(Inicio);

// EJERCICIO 1

// Partiendo de la página ejemploLoremIpsum realizar un script que muestre las etiquetas con los siguientes id usando alert al cargarse la página:
//  buscador
//  noticias
//  menu_principal
//  secundario
//  pie

// function Inicio(){
//     alert("El buscador es un "+$("#buscador").prop("tagName"));
//     alert("La noticia es un "+$("#noticias").prop("tagName"));
//     alert("El menu secundario es un "+$("#secundario").prop("tagName"));
//     alert("El menu principal es un "+$("#menu_principal").prop("tagName"));
//     alert("El pie es un "+$("#pie").prop("tagName"));
// }





// EJERCICIO 2

// Partiendo de la página ejemploLoremIpsum realizar un script que muestre al cargarse la página cuántos elementos tienen aplicada cada una de las siguientes clases y de qué tipo de etiqueta son, usando alert para mostrar los datos: Usar .prop(“tagName”) y .length
//  clear
//  fecha
//  copyright

// function Inicio(){
// alert("Enlaces totales "+$(".enlaces").length + $(".enlaces").prop("tagName"));
// alert("Total con clase fecha "+$(".fecha").length +" y son "+ $(".fecha").prop("tagName"));
// alert("Total con clase copyrigth "+$(".copyright").length + " y son "+ $(".copyright").prop("tagName"));
// }

// Los alert siguientes con .length nos indican cuantos enlaces hay y cuantos de cada cosa que preguntemos hay


// EJERCICIO 3
// Partiendo de la página ejemploLoremIpsum mostrar en cada una en un alert la siguiente información al cargarse la página:
//  Nº de enlaces de la página.
//  Nº de imágenes de la página.
//  Nombre de la etiqueta con el id ‘busqueda’
//  Nº de enlaces dentro del id ‘noticias’.
//  Nº de elementos con atributo type=”button” en la página.
//  Nºde elementos con atributo type en la página.
//  Nombre de la etiqueta con la clase ‘enlaces’ aplicada.
//  Nºde divs con la clase ‘artículo’.
//  Nº de enlaces dentro de los div con la clase ‘artículo’.


// preguntar a dani esto de declarar. Respuesta que mejor declarar variables cuando el caso es que se va a repetir en varias ocaciones para que no se realice una busqueda en cada ocación.      TERMINAR ESTE EJERCICIO

// let enlaces=$("a");                 
// let imagenes=$("img");


// function Inicio(){
// alert("Numero de enlaces  "+$("a").length);
// alert("numero de imagenes "+$("img").length);
// alert("Nombre de la etiqueta con el id 'busqueda' "+$("#buscador").prop("tagName"));
// alert("Nombre de enlaces dentro del id 'noticias' "+$("#noticias a").length);
// }





// EJERCICIO 4
// Realiza las siguientes acciones al cargar la página que usan las funciones text, html, height y width:
//  Muestra en un alert el texto del elemento con id “menu_principal”. (Usa la función text)
//  Muestra en un alert el código html del elemento con id “noticias”. (Usa la función html)
//  Muestra en un alert el texto de copyright que aparece en la página.
//  Muestra en un alert el ancho y el alto del div con id noticias. (Usa width y height)
//  Modifica el alto y ancho de los div con clase “artículo” de la página.
//  Modificar el texto de todos los enlaces de la página a “pincha aquí por favor”. (Usa la función text)
//  Modificar el texto de todos los enlaces una imagen llamada enlace.jpg que esta dentro de la carpeta imagenes. (Usa la función html)
//  Modifica el texto de todos los parrafos de los div con clase “articulo” por el texto “ARTICULO CENSURADO”.
//  Modifica el contenido del div con id “secundario” por un h2 que ponga “NO ENTIENDO LO QUE PONE AQUÍ”.
//  Modifica el texto de los enlaces dentro del div con id “menu_principal”.




// function Inicio(){
    
//     alert("Texto del id:menu_principal= "+$("#menu_principal").text());
//     alert("Codigo html del id:noticias= "+$("#noticias").html());
//     alert("Texto de copyright de la pagina= "+$("span.copyright").text());
//     alert("Ancho del div con id:noticias= "+$("#noticias").width());
//     alert("Alto del div con id:noticias= "+$("#noticias").height());

//     let articulos=$("div.articulo");

//         articulos.height(500);
//         articulos.width(500); 

//     $("a").text("Pincha aqui por favor"); 
//     $("a").html("<img width='50' src='imagenes/enlace.jpeg'>");
//     $("div.articulo p").text("ARTICULO CENSURADO"); 
//     $("div#secundario").html("<h2>NO ENTIENDO LO QUE PONE AQUI</h2>"); 
//     $("#menu_principal a").text("enlaces modificados");



// }



// EJERCICIO 5
// Realiza las siguientes acciones usando la función attr:
//  Modifica todos los enlaces de la página para que apunten a http://www.google.es
//  Modifica todos los enlaces dentro del div con id “menu_principal” para que apunten a http://www.w3.org
//  Cambia a “password” el valor del atributo type del botón que hay en la página.


// function Inicio(){

//     $("a").attr("href","http://www.google.es");
//     $("#menu_principal a").attr("href","https://www.w3.org/");
//     $("#boton").attr("type","password");

// }





// EJERCICIO 6
// Realiza las siguientes acciones usando la función css:
//  Ponle un tono de amarillo de fondo al div con id “principal”.
//  Ponle borde de color rojo, punteado y de 2px a todos los div con la clase “articulo”.
//  Poner un tono de verde de fondo al div con id “publicidad” y un color de letra rojo.
//  Cambiar el color de fondo del botón que hay en la página a cyan.
//  Mostrar que tipo de borde tiene el div con id “publicidad”.
//  Cambia el color de letra a yellow de los enlaces del “menú_principal” y quítales el subrayado.
//  El logotipo de la página que esta en un h1 dentro del div con id “logo” por el quieras tú. La imagen esta como fondo por lo que tendrás que usar css.
//  Modifica los h2 de los div con clase “articulo” de la página para que aparezcan de color azul, subrayados y con tamaño de texto 22px.



// function Inicio(){

//     $("#principal").css("background-color","yellow");
//     $("div.articulo").css({"border-width": "2px",
//                             "border-color": "red",
//                             "border-style": "dotted"});
//     // otro modo de hacer este cambio anterior de borde sería    $("div.articulo").css("border","2px dotted red");
//     // y otro modo quizás el que más se usa son válidos todos : $("div.articulo").css("border-width","2px").css("border-style","dotted").css("border-color","red");
//     $("div#publicidad").css({"background-color": "#0e7e6a","color": "red"});
//     $("#boton").css("background-color","cyan");
//     alert("El borde del menu principal es de: "+$("#menu_principal").css("border"));
//     $("#logo h1").css({"background":"url(fondologo.jpg)", "background-repeat": "no-repeat", "background-position": "center", "padding": "20%"});
//     $("div.articulo h2").css("font-size",22);

//     Si busco sumar dos pixeles más al h2 conocer previamente el tamaño que tiene sería así:
//     $("div.articulo h2").css("font-size","+=2");
      
// }


// EJERCICIO 7
// Realiza las siguientes acciones que usan las funciones vistas en los ejercicios anteriores:

//  Cambia el texto de los enlaces que estén en las divs publicidad, articulo y secundario a “leer más…”
//  Cambiar la imagen de todos los artículos por la imagen de la bombilla encendida que esta en la carpeta imágenes. (modifica su src)
//  Ponerle un borde de color rojo y tamaño 3 pixeles al input text que hay en la página.
//  Cambia todos los enlaces dentro del div con id noticias de la página para que abran en una ventana distinta (atributo target).

// function Inicio(){
//     $("div.publicidad a,div.articulo a,div#secundario a").text("seguir leyendo");
//     $("div.articulo img").attr(.0
// "src","encendida.gif");
//     $("input[type=text]").css("border-color","red")
//                         .css("border-width","3px");
//     $("div#noticias a").attr("target","_blank");
    
// }




// Explicación fist last eq:---------------------------


// function Inicio(){
//     let parrafos=$("p");
//     parrafos.css("background-color","pink")
//             .text("Modificado");

//     // para actuar sobre el primer párrafo solamente:

//     parrafos.first().css("background-color","green")
//             .first().text("Soy el primero???");

//     // para actuar sobre el último parrafo:

//     parrafos.last().css("background-color","red")
//             .last().text("Soy el ultimo");
    
//     // para elegir una posición concreta:

//     parrafos.eq(2).css("background-color","tomato")
//             .text("Soy el tercero");


//     let enlaces=$("a");
//     alert(enlaces.fist().text());
//     alert(enlaces.eq(1).attr("href"));
//     alert(enlaces.last().css("font-size"));
// }



// EJERCICIO 8
// Realiza las siguientes acciones al cargar la página usando las funciones first, last y eq:
//  Modifica el texto del primer y ultimo enlace de la página por AQUÍ ESTOY PULSAME¡¡¡ (Usa la función first y last)
//  Modifica el href del primer y ultimo de los enlaces dentro de“menu_principal” por http://www.escuelaartegranada.com
//  Modifica el texto del segundo y tercer enlace dentro del div con id “menu_principal” por la imagen. (Usa la función eq)
//  Ponle un borde de color rojo, solido y 3px al primero de los div con la clase articulo.

// function Inicio(){

//         let enlaces=$("a");

//         enlaces.first().text("AQUI ESTOY PULSAME!!!");
//         enlaces.last().text("AQUI ESTOY PULSAME!!!");

//         let enlaces_principal=$("#menu_principal a");

//         enlaces_principal.first()
//                         .attr("href","http://www.escuelaartegranada.com");

//         enlaces_principal.last()
//                         .attr("href","http://www.escuelaartegranada.com");


//         enlaces_principal.eq(1).html("<img src='encendida.gift width='30px'>");
//         enlaces_principal.eq(2).html("<img src='encendida.gift width='30px'>");
// }



// EJERCICIO 9
// Realizar un script que muestre el número de párrafos y el número de enlaces de la página. Después mostrará a donde apunta el primero, el tercero y el último enlace. Usar dos alert distintos para cada cosa. Debería aparecer lo siguiente:
// 1ºAlert
// Resumen: X párrafos y X enlaces
// 2ºAlert
// El primer enlace apunta a: enlace1
// El cuarto enlace apunta a: enlace3
// El último enlace apunta a: enlaceultim


// function Inicio(){
        
//         let parrafos=$("p");
//         let enlaces=$("a");
        
//         alert("Resumen: "+parrafos.length+" parrafos y "+enlaces.length+" enlaces");

//         alert("El primer enlace apunta a: "+
//                 enlaces.first().attr("href")+
//                 "\nEl tercer enlace apunta a: "+
//                 enlaces.eq(2).attr("href")+
//                 "\nEl ultimo enlace apunta a: "+
//                 enlaces.last().attr("href"));
// }

// // la \n (barra + n) se utiliza para el salto de línea en el alert ya que no funciona el html como un <br>






// EJERCICIO 10
// Crea un script donde se modifiquen el texto (el que consideres adecuado en cada caso) y el href del segundo, tercer y cuarto enlaces de la div menu_principalpara que estos apunten respectivamente a:
//  www.google.es
//  www.escuelaartegranada.com
//  www.w3schools.com



// function Inicio(){

//         let enlaces_principal=$("#menu_principal a");

//         enlaces_principal.eq(1).text("Ir a google");
//         enlaces_principal.eq(1).attr("href","http://www.google.es").attr("target","_blank");
//         enlaces_principal.eq(2).text("Ir a EAG");
//         enlaces_principal.eq(2).attr("href","http://www.escuelaartegranada.com");
//         enlaces_principal.eq(3).text("Ir a W3School");
//         enlaces_principal.eq(3).attr("href","http://www.w3school.es");
// }


// el cambio de target a _blank sirve para abrir el navegador en otra página cuando se clicka sobre él




// EJERCICIO 11 Con explicación del 5 de marzo:------------------



// EJERCICIO 11
// Realizar las siguientes acciones asignado eventos de click:
//  Crear un evento de click sobre el botón de forma que se ponga de color azul el fondo del div con id “principal”.
//  Crear un evento de click sobre el id “principal” de forma que se ponga de color azul el fondo del div con id “principal”.
//  Crear un evento de click sobre el id “principal” que le ponga borde solido verde de 1px a los div con clase articulo.
//  Crear un evento de click sobre el botón de forma que aumente el tamaño de la letra del id secundario cada vez que se pulse.


// $(document).ready(inicio);

// function inicio(){
// //     $("input[type=button]").click(cambiarFondo); esta es una manera de la que se puede HTMLAnchorElement, pero la siguiente con el id es más rapida
// //     $("#boton").click(cambiarFondo);
// //     $("#principal").click(cambiarFondo);
// //     $("#principal").click(modificarArticulos);

//         $("#boton").click(aumentarLetra);

// }

// function aumentarLetra(){

//         if(parseInt($("#secundario").css("font-size"))<18){
//                 $("#secundario").css("font-size","+=1");
//         }else{
//                 alert("No se puede aumentar mas la tipografia");
//         }
        
// }

// function cambiarFondo(){
//         $("#principal").css("background-color","cyan");
// }

// function modificarArticulos(){
//         $("div.articulo").css("border","4px solid green");
// }


// en la función inicio para que se viusalice se debería ir descomentando uno a uno para que no se pisen







// EJERCICIO 12
// Realizar las siguientes acciones usando las funciones addClass, removeClass y hasClass:
//  Crear un evento de click sobr el botón que añada la clase botón_personlizado al propio botón.
//  Igual que el anterior pero si ya tiene el estilo que informe mediante un alert que no pulse más.
//  Crear un evento de click que añada la clase botón_personalizado si no la tiene o que la quite si ya la tiene.
//  Cuando se pulse en el div principal aplique el estilo de clase claseA al mismo div y cuando pulse el botón añada la clase también al div principal. ¿Que pasa cuando se le aplican las dos clases al mismo tiempo?


// $(document).ready(inicio);

// function inicio(){

//         $("#boton").click(ponle_clase);
// }


// function ponle_clase(){

//         if($("#boton").hasClass("boton_personalizado")){
//                 alert("No pulses mas que ya lo tiene");
//         }else{
//                 $("#boton").addClass("boton_personalizado");
//         }
                
//         Nota: si quieres que se ponga y se quite continuamente de modo que sea un true false constante podemos usar el toggleClass:

//         $("#boton").toggleClass("boton_personalizado");

// }

// la funcion ponle clase nos sirve para cambiar la clase de algo y cambiarla por otra . EN el if hacemos que si no la tiene se pone la clase y si la tiene nos dice que ya la tiene y que no hay que pulsar más.


// EJERCICIO 13
// Realizar las siguiente acciones usando las funciones de animación show, hide, slideUp, slideDown, fadeIn, fadeOut y anímate:
//  Cuando se pulse el botón aplique efectos de desaparición sobre el div principal secundario y noticias con distintas animaciones.
//  Cuando se pulse el botón aplique efectos de desaparición/aparición sobre el div principal secundario y noticias con distintas animaciones.
//  Hacer una personalizada con anímate left height


$(document).ready(inicio);

//function inicio(){
//        $("#boton").click(desaparecer);
//}


function inicio(){
	
	let boton=$("input[type=button]");
	boton.eq(0).click(cambiarFondoTodos);
	boton.eq(1).click(cambiarFondoUno); 
	boton.eq(2).click(aumentarLetraTodos);
	boton.eq(3).click(aumentarLetraUno);
	boton.eq(4).click(cambiarBordeTodos);
	boton.eq(5).click(cambiarBordeUno);
	boton.eq(6).click(cambiarImagenTodos);
	boton.eq(7).click(cambiarImagenUno);
	boton.eq(8).click(cambiarTextoTodos);
	boton.eq(9).click(cambiarTextoUno);
	boton.eq(10).click(cambiarAlturaTodos);
	boton.eq(11).click(cambiarAlturaUno);
	
}
function cambiarFondoTodos(){
	$(".decorador").css("background-color","cyan");
}
function cambiarFondoUno(){
         $("#pantalla3").css("background-color","cyan");
 }
function aumentarLetraTodos(){
	 $(".decorador").css("font-size","+=2px");
}
function aumentarLetraUno(){
	 $("#pantalla1").css("font-size","+=2px");
}
function cambiarBordeTodos(){
	 $(".decorador").css("border-radius","20px");
}
function cambiarBordeUno(){
	 $("#pantalla2").css("border-radius","20px");
}
function cambiarImagenTodos(){
	 $("img").attr("src", "https://cdne.ojo.pe/thumbs/uploads/img/2018/05/16/imagen-de-mario-sin-bigote-deja-en-shock-a-muchos--256300-jpg_700x0.jpg");
}
function cambiarImagenUno(){
	 $("#pantalla1 img").attr("src", "http://2.bp.blogspot.com/_QtDFVR44S_Q/TTu95-aiCqI/AAAAAAAAA-k/jP65Ns2H-f0/s1600/camaleon2.jpg");
}
function cambiarTextoTodos(){
	$("h3").text("Hola")
}
function cambiarTextoUno(){
	$("#pantalla2 h3").text("Esta es la pantalla 2")
}
function cambiarAlturaTodos(){
	$(".decorador").css("height","500px")
}
function cambiarAlturaUno(){
	$("#pantalla3").css("height","500px")
}



//function desaparecer(){
        // $("#principal").hide(2000);
        // $("#noticias").slideUp(2000);
        // $("#secundario").fadeOut(2000);

        // Los siguiente son los mismos efectos de ocultar pero con la opción de clickar y desaparecer y clickar y reaparecer continuamente con el toggle:

        // $("#principal").toggle(2000);
        // $("#noticias").slideToggle(2000);
        // $("#secundario").fadeToggle(2000);

//        $("#menu_principal").css("position","relative");
//        $("#menu_principal").animate({width:200,height:200},3000);
//
//
//}