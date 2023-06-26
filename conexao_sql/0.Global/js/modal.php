
const btn_endereco = document.querySelector('.endereco');
const dialog_endereco = document.querySelector('.dialog_endereco');
<?php 
    
?>
const add_endereco = document.querySelector('.btn_endereco');
const dialog_add_endereco = document.querySelector('.dialog_add_endereco');

const btn_pagamento = document.querySelector('.pagamento');
const dialog_pagamento = document.querySelector('.dialog_pagamento');

const add_pagamento = document.querySelector('.btn_pagamento');
const dialog_add_pagamento = document.querySelector('.dialog_add_pagamento');

const btn_dados = document.querySelector('.meus_dados');
const dialog_dados = document.querySelector('.dialog_dados');

const btn_sacola = document.querySelector('.sacola');
const dialog_sacola = document.querySelector('.dialog_sacola');

const add_sacola = document.querySelectorAll('.sacola-add');
const items_sacola = document.querySelector("#items-sacola");

var items = [];


add_endereco.onclick = () => dialog_add_endereco.showModal();

add_pagamento.onclick = () => dialog_add_pagamento.showModal();

btn_pagamento.onclick = () => dialog_pagamento.showModal();

btn_endereco.onclick = () => dialog_endereco.showModal();

btn_dados.onclick = () =>  dialog_dados.showModal();

btn_sacola.onclick = () => dialog_sacola.showModal();

//btn_sacola.onclick = () => {
//    items_sacola.innerHTML = '';
//    Object.keys(items).forEach(function (el) {
//        tr = document.createElement("tr");
//        td_name = document.createElement("td");
//        td_value = document.createElement("td");
//        td_name.innerHTML = el;
//        td_value.innerHTML = items[el];
//        tr.appendChild(td_name);
//        tr.appendChild(td_value);
//        items_sacola.appendChild(tr);
//    })
//    dialog_sacola.showModal();
//}

//add_sacola.forEach(el => el.addEventListener('click', event => {
//    incrementCounterItem(el.getAttribute("data-name"))
//}))


// contador da sacola
//let counter = 0;

// Função para atualizar o contador na página
//function updateCounter() {
//    let counterElement = document.querySelector(".counter");
//    counterElement.textContent = counter;
//}

// Função para adicionar 1 ao contador
//function incrementCounter() {
//    counter++;
//    updateCounter();
//}

// Função para retirar 1 do contador
//function decrementCounter() {
//    if (counter > 0) {
//        counter--;
//        updateCounter();
//    }
//}

//function incrementCounterItem(name) {
//    if(items[name]) {
//        items[name]++;
//    } else {
//        items[name] = 1
//    }
//}

//function clearSacola() {
//    items = [];
//    items_sacola.innerHTML = '';
//}

// Evento de clique para adicionar
//document.getElementById("addButton").addEventListener("click", incrementCounter);

// Evento de clique para retirar
//document.getElementById("subtractButton").addEventListener("click", decrementCounter);
