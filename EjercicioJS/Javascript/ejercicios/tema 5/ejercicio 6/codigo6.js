document.write("<table border='1px'>"+
                "<tr>"+
                "<th>Nombre</th>"+
                "<th>Precios</th>"+
                "<th>Calorias</th>"+
                "<th>Descripcion</th>"+
                "<th>Imagen de muestra</th>"+
                "</tr>");

for(let i=0; i<menu.length; i++){
    if(menu[i]["precio"]<6 && menu[i]["calorias"]>600){
    document.write("<tr>"+
                    "<td>"+menu[i]["nombre"]+"</td>"+
                    "<td>"+menu[i]["precio"]+"</td>"+
                    "<td>"+menu[i]["calorias"]+"</td>"+
                    "<td>"+menu[i]["descripcion"]+"</td>"+ 
                    "<td><img width='20%' src='"+menu[i]["imagen"]+"'></td>"+
                   "</tr>");
    }
}                
document.write("</table>");