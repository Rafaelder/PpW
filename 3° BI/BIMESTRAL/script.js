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
