
let numeroIntroducido,resultado;
numeroIntroducido=parseFloat(prompt("Introduce un número"));
resultado = condicion(numeroIntroducido);
alert("El número introducido es "+resultado);
 
function condicion(numeroIntroducido) {
  if(numeroIntroducido % 2 == 0) {
    return "par";
  }
  else {
    return "impar";
  }
}

