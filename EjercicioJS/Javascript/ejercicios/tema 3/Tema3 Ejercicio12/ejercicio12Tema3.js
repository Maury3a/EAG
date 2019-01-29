let vehiculo=prompt("dime tu vehiculo");
if(vehiculo=="bicicleta"){
    document.write("<img src='https://www.bikelec.es/media/catalog/product/cache/1/image/1200x1020/9df78eab33525d08d6e5fb8d27136e95/b/i/bicicleta-electrica-subzero-mtb-1000w.jpg'>");
}else if(vehiculo=="triciclo"){
    document.write("<img src='https://www.costco.com.mx/medias/sys_master/products/h58/h64/11215662317598.jpg'>");
}else if(vehiculo=="coche"){
    document.write("<img src='https://i.pinimg.com/originals/8f/70/88/8f70880381e09cfaf9aa5a97b6fc7435.jpg'>")
}else{
    alert("error");
}