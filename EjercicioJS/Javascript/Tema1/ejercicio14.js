var n1,n2,n3;
n1=parseFloat(prompt("Introduce el primer número"));
n2=parseFloat(prompt("Introduce el segundo número"));
n3=parseFloat(prompt("Introduce el tercer número"));
resultado=igualar(n1,n2,n3);
alert(resultado);
function igualar(){
if(n1==n2==n3){
	return "Todos los números son iguales";
	}else{
		return "Los números son distintos entre sí";	
	}
}