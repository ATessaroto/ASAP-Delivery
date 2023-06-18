
const btn_pagamento = document.querySelector('.pagamento');
const dialog_pagamento = document.querySelector('.dialog_pagamento');

const btn_dados = document.querySelector('.meus_dados');
const dialog_dados = document.querySelector('.dialog_dados');

const btn_sacola = document.querySelector('.sacola');
const dialog_sacola = document.querySelector('.dialog_sacola');


btn_pagamento.onclick = () => dialog_pagamento.showModal();

btn_dados.onclick = () => dialog_dados.showModal();

btn_sacola.onclick = () => dialog_sacola.showModal();




var counter = 0;

// Função para atualizar o contador na página
function updateCounter() {
    var counterElement = document.querySelector(".counter");
    counterElement.textContent = counter;
}

// Função para adicionar 1 ao contador
function incrementCounter() {
    counter++;
    updateCounter();
}

// Função para retirar 1 do contador
function decrementCounter() {
    if (counter > 0) {
        counter--;
        updateCounter();
    }
}

// Evento de clique para adicionar
document.getElementById("addButton").addEventListener("click", incrementCounter);

// Evento de clique para retirar
document.getElementById("subtractButton").addEventListener("click", decrementCounter);
