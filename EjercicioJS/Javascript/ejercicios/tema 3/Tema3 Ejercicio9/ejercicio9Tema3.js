let url=prompt("introduce una url");

let http=url.split("://");


if(http[0]=="http" || http[0]=="https"){
    
   document.write("la url es correcta "+http);

}else{
    document.write("la url no es correcta http:// "+http);

}