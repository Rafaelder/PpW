a = null;
function FazerSuco(){ 
    if(a == null){  
        document.getElementById("copo").src = "azul.jpg";
        a = 1
    } else if(a == 1){ 
        document.getElementById("copo").src = "roxo.jpg";
        a = null
    }
}
