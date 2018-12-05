let n1,n2,n3,resultado;
n1=parseFloat(prompt("Introduce el primer número"));
n2=parseFloat(prompt("Introduce el segundo número"));
n3=parseFloat(prompt("Introduce el tercer número"));
resultado=igualar(n1,n2,n3);
alert(resultado);
function igualar(){
if(n1<10 && n2<10 && n3<10){
	return "Todos los números son menores que 10";
	}else{
		return "Bien hecho, todos los números son mayores que 10";	
	}
}