function login(){
    user = document.form.a.value;
    pass = document.form.b.value;
    if(user == "" && pass == ""){
        window.location.href = 'IMC.html';
    }else{
        alert("USUÁRIO OU SENHA INCORRETOS")
    }
    console.log(user, pass);
}

function imc(){  
    peso = parseFloat(document.getElementById('peso').value);
    altu = parseFloat(document.getElementById('altu').value);
    resultado = peso / (altu * altu);
    document.getElementById("resultado").innerHTML = "IMC: " + resultado.toFixed(3);

    if(resultado <= 18.5){
        document.getElementById("1").style.color = "red";
    } else if(resultado > 18.5 && resultado <= 25){
        document.getElementById("2").style.color = "green";
    }else if(resultado > 25 && resultado <= 30){
        document.getElementById("3").style.color = "yellow";
    }else if(resultado > 30 && resultado <= 35){
        document.getElementById("4").style.color = "red";
    }else if(resultado > 35){
        document.getElementById("5").style.color = "red";
    }
}
