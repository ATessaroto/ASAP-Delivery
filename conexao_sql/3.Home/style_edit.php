<?php
	header("Content-type: text/css");
?>

body
{
	background-image: url(./Imagens/Fundo_home.png);
    background-attachment: fixed;
    background-position: right top;
    background-size: 100%;
	background-repeat:no-repeat;
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
    text-align: center;
}

body:focus, body::after
{
	outline: none;
}

*:focus {
    outline: none;
}


/*Fim*/


form input
{
    width: 100%;
    padding: 5px 10px;
    box-sizing: border-box;
}

form input, form select
{
    height:45px;
    width: 375px;
    margin: 0 auto;
    margin-bottom: 20px;
    background: #fcfbfb;
    border-style: solid;
    border-radius: 4px;
    border-width: 0.5px;
    border-color:rgb(200, 218, 218);
    font-family: Arial, Helvetica, sans-serif;
    
    font-size: 16px;
    font-weight: 100;
    color: rgb(39, 39, 39);
}

form input::placeholder, input::placeholder[type="date"]
{
    padding: 3px;
}

.titulo
{
    background-color: transparent;
    font-weight: bold;
    font-size: 24px;
    font-family: Arial, Helvetica, sans-serif;
    margin-top: 0;
}

#cpf_reg, #date_reg, #rua_reg, #numero_reg
{
    height:45px;
    width: 180px;
}

.personal_info, .endereco
{
    display: inline-block;
    margin: auto;
    column-gap: 15px;
    grid-template-columns: repeat(2, 1fr);
    width:420px;
}

#btn_endereco
{
	height: 45px;
	border-radius: 5px;    
    border: none;
    margin: 0 auto;
    background: #ffc72c;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
	width: 380px;
}

#btn_endereco:hover
{
    background-color: #fcd874;
}

#btn_registro
{
    height: 45px;
    width: 380px;
    border-radius: 5px;    
    border: none;
    margin: 0 auto;
    background: #ffc72c;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
}

#btn_registro:hover
{
    background-color: #fcd874;
}


#id_user
{
	display:none;
}

.dialog_dados,.dialog_pagamento,.dialog_sacola,.dialog_endereco,.dialog_add_endereco,.dialog_editar_endereco
{
	border-radius:7px;
	border-color: #ffc72c;
}


.endereco_usuario
{
	padding-bottom: 15px;
}

.card
{
	height:90px;
	width: 360px;
	margin: auto;
	text-decoration:none;
}


.card_click
{
	text-decoration:none;
}

.titulo
{
	display: inline-block;
	height:40px;
	padding-left: 10px;
	font-size: 18px;
}

.sub_titulo
{
	padding-left: 15px;
}

.texto_titulo, .texto_subtitulo, #icone_endereco 
{
	display: inline-block;
}

.texto_titulo
{
	padding-left: 10px;
}

#titulo
{
	text-align: center;
}



#titulo
{
	text-align: center;
}


.form_endereco_edit_del
{
	margin:auto;
	display: inline-block;
	background-color: white;
	border-radius:7px;
	border: solid 3px #ffc72c;
	height: 450px;
	width: 450px
}

.spacing
{
    margin-top:50px;
}

.div_btn
{
    height:60px;
    width:350px;
    display: flex;
    justify-content: space-between;
    text-align: center;
    padding-left:55px

}

#btn_delete
{
    background-color:red;
    height: 40px;
    width: 40px;
    border: none;
    border-radius: 4px;
    cursor:pointer;
}

#btn_delete:hover
{
    background-color:rgb(255, 126, 126);
}

#btn_editar_endereco
{
    background-color:#ffc72c;
    height: 42px;
    width: 280px;
    border: none;
    border-radius: 4px;
    cursor:pointer;
    font-weight: bolder;
    font-size: 16px;
}

#btn_editar_endereco:hover
{
    background-color: #fcd874;
}

#redirect_edit
{
    font-weight: bolder;
    color:#ffc72c;
    text-decoration:none;
}

#redirect_edit:hover
{
    color: #fcd874;
}

#id_pagamento
{
	display:none
}

.form_endereco_edit_del
{
	height: 580px
}



#quantidade
{
    height:35px;
    width: 32px;
}

.form_add_sacola
{
    margin:auto;
	display: inline-block;
	background-color: white;
	border-radius:7px;
	border: solid 3px #ffc72c;
	height: 450px;
	width: 450px
}

.div_botao
{
    margin-bottom:15px;
}

#id_item,#id_loja
{
    display:none;
}

#id_valor
{
    height:35px;
    width: 61px;
    border: none;
    
}

.card_itens
{
	height:90px;
	width: 360px;
	margin: auto;
	text-decoration:none;
    border: solid  2px black;
    border-radius: 3px;
    text-decoration:none
}

.id_item_pedido,.id_endereco_card
{
    display:none;
}

#btn_fechar_sacola
{
    height: 45px;
	border-radius: 5px;    
    border: none;
    margin: 0 auto;
    background: #ffc72c;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
	width: 380px;
}