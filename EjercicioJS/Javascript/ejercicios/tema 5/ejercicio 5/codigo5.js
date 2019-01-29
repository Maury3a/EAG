document.write("<table class='tabla' border='1px'>");

for(let i=0; i<=paginas.length; i++){
    document.write("<tr>"+
                   "<td>"+paginas[i]["nombre"]+"</td>"+
                   "<td>"+paginas[i]["tema"]+"</td>"+
                   "<td><a href='"+paginas[i]["url"]+"'>enlace</a></td>"+
                   "</tr>");
}
document.write("</table>");