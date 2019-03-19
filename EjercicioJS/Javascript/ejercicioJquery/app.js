

// EJERCICIO 3

// $(document).ready(inicio);
// function inicio(){
// 	let botones=$("input[type=button]");
// 	botones.first().dblclick(cambiarTexto);
// 	botones.eq(1).click(interruptor);
// 	botones.eq(2).click(cambiarColor);
// }
// function interruptor(){
// 	let bombilla=$("img");
// 	if(bombilla.attr("src")=='encendida.gif'){
// 		bombilla.attr("src","apagada.gif");
// 	}else{
// 		bombilla.attr("src","encendida.gif");
// 	}
// }
// 	function cambiarColor(){
// 		let divCambiado=$("div#info");
// 		if(divCambiado.css("background-color")=="rgb(173, 216, 230)"){
// 			divCambiado.css("background-color","yellow");
// 		}else{
// 			divCambiado.css("background-color","lightblue");
// 		}
// 	}

// function cambiarTexto(){
// 	let parrafos=$("p");
// 		parrafos.eq(0).text("Javascript mola");
// 		parrafos.eq(1).text("Javascript mola");
// 		parrafos.eq(2).text("Javascript mola");
// }

// EJERCICIO 4

$(document).ready(inicio);

function inicio(){
let bombilla=$("img");
	let botones=$("input[type=button]");
	botones.first().dblclick(cambiarTexto);
	bombilla.mouseenter(interruptor);
	bombilla.mouseleave(interruptor);
	 botones.eq(2).contextmenu(cambiarColor);
}
function interruptor(){
	let bombilla=$("img");
	if(bombilla.attr("src")=='encendida.gif'){
		bombilla.attr("src","apagada.gif");
	}else{
		bombilla.attr("src","encendida.gif");
	}
}
	function cambiarColor(){
		let divCambiado=$("div#info");
		if(divCambiado.css("background-color")=="rgb(173, 216, 230)"){
			divCambiado.css("background-color","yellow");
		}else{
			divCambiado.css("background-color","lightblue");
		}
	}

function cambiarTexto(){
	let parrafos=$("p");
		parrafos.eq(0).text("Javascript mola");
		parrafos.eq(1).text("Javascript mola");
		parrafos.eq(2).text("Javascript mola");
}
