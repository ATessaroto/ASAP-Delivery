const btn_pagamento = document.querySelector('.pagamento');
const dialog_pagamento = document.querySelector('.dialog_pagamento');

const btn_dados = document.querySelector('.meus_dados');
const dialog_dados = document.querySelector('.dialog_dados');

const btn_sacola = document.querySelector('.sacola');
const dialog_sacola = document.querySelector('.dialog_sacola');

btn_pagamento.onclick = () => dialog_pagamento.showModal();

btn_dados.onclick = () => dialog_dados.showModal();

btn_sacola.onclick = () => dialog_sacola.showModal();