function moverImagem() {
    const imagem = document.getElementById("mario");
    const bttn = document.getElementById("p");
    const container = document.getElementById("container");
    const maxWidth = container.clientWidth - imagem.clientWidth;
    let currentPosition = 0;
    const step = 6; // O quanto a imagem vai se mover a cada quadro

    bttn.style.display = "none";

    function left(){
    imagem.style.transform = "none";
        if (currentPosition <= maxWidth) {
            currentPosition += step;
            imagem.style.left = currentPosition + "px";
            requestAnimationFrame(left);
            console.log(currentPosition);
        }
        else if (currentPosition = maxWidth) {
            right();
        }
    }

    function right() {
        imagem.style.transform = "scalex(-1)";
        if (currentPosition >= -320) {
            currentPosition -= step;
            imagem.style.left = currentPosition + "px";
            requestAnimationFrame(right);
            console.log(currentPosition);
        }else{
            bttn.style.display = "block";
        }
        
    }
    left();

}