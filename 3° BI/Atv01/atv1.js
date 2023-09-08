//1.
var x = "3";
var y = "2";
var w = 3;
var z = 2;
alert(x + y);
alert(w + z); 
/*A primeira soma mostra 3 e ao lado 2 por causa da variaveis serem do tipo string enquanto na segunda as variáveis são numbers,
 sendo os números somados normalmente.*/

//2.
alert("elder");

//3.
var num = 100
alert(num * (3/5));

//4.
var anoNasc = 2004;
const dataAtual = new Date();
const anoAtual = dataAtual. getFullYear();
alert("idade: " + (anoAtual - anoNasc));

//5.
var num1 = 10;
var num2 = 2;
document.write("soma:" + (num1 + num2) + "<br/>");
document.write("subtração:" + (num1 - num2) + "<br/>");
document.write("multiplicação:" + (num1 * num2) + "<br/>");
document.write("divisão:" + (num1 / num2) + "<br/>");
document.write("resto:" + (num1 % num2) + "<br/>");

//6.
var base = 5;
altura = 3;
document.write("perímetro(supondo que seja equilatero): " + (3 * base) + "<br/>");
document.write("Área: " + (base*altura/2) + "<br/>");

//7.
var catOp = 5;
var catAdj = 7;
document.write("A hipotenusa do triángulo mede: " + (catOp^2 + catAdj^2) + "<br/>");

//8.
var n1 = 1;
var n2 = 2;
var n3 = 3;
document.write("somatório: " + (n1 + n2 + n3) + "<br/>" + "Média: " + ((n1 + n2 + n3)/3)+ "<br/>");

//9.
var nome = "João";
var sobrenome = "Maria";
document.write("Nome completo: " + nome + " " + sobrenome + "<br/>");

//10.
var number = 2;
document.write("antessesor: " + (number - 1) + "<br/>" + "sucessor: " + (number + 1) + "<br/>");

//11.
var raio = 2;
document.write("Área do circulo: " + (2* Math.PI * raio));