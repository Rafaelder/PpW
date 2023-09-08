var strNum = prompt("Digite um  Número");
var num = parseInt(strNum);
if(num > 10){
    document.write("É maior que 10<br/>");
}
else if(num < 10){
    document.write("Não é maior que 10<br/>");
} 
else if(num == 10){
    document.write("É igual a 10<br/>");
 }
else{
    alert("Número invalido<br/>")
}

var strNum2 = prompt("digite outro número:");
var num2 = parseInt(strNum2);
document.write("Soma:" + (num + num2) + "<br/>");

var strNum3 = prompt("Digite um  Número");
var num3 = parseInt(strNum3);
var strOperação = prompt("Digite o nuúmero da operação desejada na seguinte ordem: + * / -" );
var strNum4 = prompt("Digite um  Número");
var num4 = parseInt(strNum4);
switch(strOperação){
    case ("1"):
        document.write("A soma dos dois números é: " + (num3 + num4) + "<br/>");
        break;
    case ("2"):
        document.write("A multiplicação dos dois números é: " + (num3 * num4) + "<br/>");
        break;
    case ("3"):
        document.write("A divisão dos dois números é: " + (num3 / num4) + "<br/>");
        break;
    case ("4"):
        document.write("A subtração dos dois números é: " + (num3 - num4) + "<br/>");
        break;
    default: 
        alert("Operação invalida");
        break;
}

var nome = prompt("digite um nome:");
var numero = prompt("digite um número:");
for(i = 0; i < numero; i++){
    document.write(nome + "<br/>");
}
