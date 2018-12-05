let alumno,practica,problemas,teorica;

alumno=String(prompt("Introduce el nombre del alumno"));
practica=parseFloat(prompt("Introduce la nota de las prácticas")*0.10).toFixed(2);
problemas=parseFloat(prompt("Introduce la nota de los problemas")*0.30).toFixed(2);
teorica=parseFloat(prompt("Introduce la nota de la teoría")*0.40).toFixed(2);
var total=(practica+problemas+teorica);
var notaFinal=parseFloat(total).toFixed(2);

if(total<5){
	alert("El alumno"+alumno+" está suspenso");
}else{
	alert("El alumno"+alumno+" está aprobado");
}

alert("La nota del alumno "+alumno+" es "+notaFinal+" con las siguientes notas: Prácticas: "+practica+" Problemas: "+problemas+" Teoría: "+teorica);