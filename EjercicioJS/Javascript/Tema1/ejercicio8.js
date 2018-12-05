let ganado, empatado,perdido,numeroPuntos;
ganado=parseFloat(prompt("Introduce el número de partidos ganados por el Real Madrid"));
empatado=parseFloat(prompt("Introduce el número de partidos empatados por el Real Madrid"));
perdido=parseFloat(prompt("Introduce el número de partidos perdidos por el Real Madrid"));
numeroPuntos=(ganado*3)+(empatado*1);
alert("El número de puntos del Real Madrid es "+numeroPuntos);