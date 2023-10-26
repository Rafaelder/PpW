function login(){
    user = document.form.a.value;
    pass = document.form.b.value;
    if(user == "" && pass == ""){
        window.open('IMC.html');
    }else{
        alert("USUÁRIO OU SENHA INCORRETOS")
    }
    console.log(user, pass);
}

function imc(){  
    peso = document.form.peso.value;
    altu = document.form.altu.value;
    document.getElementById(".resultato").innerHTML = ("resultado: " + peso/ altura^2)
}
