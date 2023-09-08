a=0;
function change_car(imagem){
    if(a == 0){
        document.getElementById(imagem).src = "carro_red_2.png";
        a = 1;
    }
    else if(a == 1){
        document.getElementById(imagem).src = "carro_blue_2.png";
        a = 0;
    }
}