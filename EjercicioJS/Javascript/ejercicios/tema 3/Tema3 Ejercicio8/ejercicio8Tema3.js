let cotizado=prompt("dime los años trabajados");
let salario=prompt("dime el salario");
let cotizado1=salario * 0.05;
let cotizado2=salario * 0.10;
let cotizado3=salario * 0.15;
let cotizado4=salario * 0.20;

if(cotizado <3){
    alert("su salario sera de "+cotizado1);
}else if(cotizado ==3 && cotizado <=5){
    alert("su salario sera de "+cotizado2);
}else if(cotizado >5 && cotizado <=8){
    alert("su salario sera de "+cotizado3);
}else{
    alert("su salario sera de "+cotizado4);
}
