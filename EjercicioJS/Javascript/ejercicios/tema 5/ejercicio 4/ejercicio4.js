// for(i=0; i<paginas.length; i++){
//     document.write("nombre: " +paginas[i]["nombre"]+"<br>");
//     document.write("descripcion: " +paginas[i]["descripcion"]+"<br>");
//     document.write("<a href='"+paginas[i]["enlace"]+"'>visitar web</a><hr>");
// }

document.write("<table border='1px'>");
document.write("<tr>"+
               "<th>nombre</th>"+
               "<th>descripcion</th>"+
               "<th>enlace</th>"+
               "</tr>" );
for(let i=0; i<marcadores.length; i++){
    document.write("<tr>");
    document.write("<td>" +marcadores[i]["nombre"]+ "</td>");
    document.write("<td>" +marcadores[i]["descripcion"]+ "</td>");
    document.write("<td><a href='"+marcadores[i]["enlace"]+"'>ir al marcador</td>");
    document.write("</tr>");
}
document.write("</table>");