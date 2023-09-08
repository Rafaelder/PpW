vetor = []
sorteados = ""
function verificar() {
    num = document.querySelector(".num").value;
    document.querySelector(".num_digitado").innerHTML = num;
    for (i = 0; i < 6; i++) {
        n = Math.floor(Math.random() * 21)
        if (vetor.includes(n)) {
            i = i - 1;
        }
        else {
            vetor[i] = n;
            sorteados += ( " " + vetor[i]);
        }

    }
    for (i = 0; i < 6; i++) {
        if (vetor[i] == num) {
            document.querySelector(".resultado").innerHTML = "VOCÊ ACERTOU";
            break;
        }
        else {
            document.querySelector(".resultado").innerHTML = "SE FUDEU";
        }
    }


    document.querySelector(".num_sorteados").innerHTML = sorteados;
}

clicado = false;
function resetar() {

    if (clicado) {
        location.reload();
    } else {
        document.querySelector(".botao").textContent = "Resetar";
        clicado = true;
    }
}
