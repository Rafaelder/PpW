function soma(){
    var val1 = document.querySelector(".v1").value;
    var val2 = document.querySelector(".v2").value;
    var result = parseFloat(val1) + parseFloat(val2);
    document.querySelector(".resultado").innerHTML = result; 
}

function subt(){
    var val1 = document.querySelector(".v1").value;
    var val2 = document.querySelector(".v2").value;
    var result = val1 - val2;
    document.querySelector(".resultado").innerHTML = result; 
}

function multi(){
    var val1 = document.querySelector(".v1").value;
    var val2 = document.querySelector(".v2").value;
    var result = val1 * val2;
    document.querySelector(".resultado").innerHTML = result; 
}

function divi(){
    var val1 = document.querySelector(".v1").value;
    var val2 = document.querySelector(".v2").value;
    var result = val1 / val2;
    document.querySelector(".resultado").innerHTML = result; 
}
