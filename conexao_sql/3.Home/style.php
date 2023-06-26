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
}

body:focus, body::after
{
	outline: none;
}

*:focus {
    outline: none;
}

#header
{
	height: 90px;
	width: 100%;
	margin: 0 auto;
	padding: 0;
	display:flex;
	position: sticky;
  	top: 0px;
	z-index:1;

	box-shadow: 1px 2px 1px rgb(236, 236, 236);;
	background-color: rgb(255, 255, 255);
}



#logo, #img_logo
{
	height: 65px;
    width: 85px;
	margin-top: 5px;
	margin-left: 10px;
}

.btn
{
	display: inline;
	text-align: center;
}

.link_btn
{
	text-decoration: none;
	font-weight: bolder;
	color: black;
	font-size: 15px;
}

#user,#bag
{
	padding-right: 5px;
}

.link_btn:hover
{
	color: #ffc72c;
}

#user:hover,#bag:hover
{
	color: #ffc72c;
}

#buttons
{
	margin-top: 35px;
	display: flex;
	margin-left: 0;
	text-align: center;
}

#btn_restaurante, #btn_categoria
{
	margin-left: 10px;
}

#btn_inicio_id
{
	color: #ffc72c;
}

.input_pesquisa
{
	height: 45px;
	width: 400px;
	border-radius: 4px;
	margin: auto;
	border: none;
	display: inline-block;
	background-color: rgb(248, 248, 248);
	padding-left: 10px
}

#pesquisa
{
	height: 45px;
	width: 200px;
	border: none;
	background-color: rgb(248, 248, 248);
	font-size: 16px;
}


input::placeholder
{
    padding: 2px;
}


/* Estilo Usuario e sacola dropdown*/

.end
{
	margin:auto;
	display:flex;
	padding-left: 100px;
	font-weight: bolder;
	font-family: Arial
	font-size: 15px;
	text-align: center;
}


.navArea
{
	display: flex;
	justify-content: space-between;
	align-items: start;
}

@media (max-width: 768px) {
	.navArea {
		flex-direction: column;
		align-items: flex-start;
	}
}

.sacola {
	margin-left: 20px;
}

@media (max-width: 768px) {
	.sacola {
		margin-left: 0;
		margin-top: 20px;
	}
}	


.navArea li
{
	position:relative;
	float:left;
	text-decoration: none;
	list-style-type: none;

}

.navArea li a
{
	color:#000000; 
	text-decoration:none;
	padding:5px 10px;
	display:block;
	cursor: pointer;
}

.navArea li a:hover
{
	color:#ffc72c;
}

.navArea li  ul
{
	position:absolute;
	width: 125px;
	right:15px;
	
	background-color:#fff;
	border:1px solid #fdfdfd;
	-moz-box-shadow:0 3px 10px 0 rgb(101, 101, 101);
	-webkit-box-shadow:0 3px 10px 0 rgb(101, 101, 101);
	border-radius: 3px;

	padding: 0;
	display:none;
}

.navArea li:hover ul, .navArea li.over ul
{
	display:block;	
}

.navArea li ul li
{
	border-radius: 3px;
	display:inline-block;
	width:125px;
	background-color: transparent;
}

.dropdown_li:hover
{
	background-color: rgb(240, 240, 240);
}

/*Fim*/

#carousel
{
	margin-top: 40px !important;
	margin-left:auto;
	margin-right: auto;
	max-width: 100%;
	
}

.slides,.slide,.slide-image
{
	border-radius: 7px;
	cursor: pointer;
}


/* Card */

p
{
	text-decoration: none;
	border: none;
	outline: none;
}

.col1
{
	display:flex;
	flex-wrap: wrap;
	gap: 15px;
	padding-left: 75px;
	padding-top: 50px;
}

.card 
{
	border: solid 3px black;
	border-radius: 5px;
	box-shadow: 0px 2px 2px 2px rgb(203, 203, 203);
	background-color: white;
	height: 150px;
	width: 130px;
}

.card:hover,.card-image:hover
{
	border-color: #ffc72c;
	cursor: pointer;
}

.card-image 
{
   height: 100px;
   width: 100%;
   border-bottom: solid 3px black;
}

.card-content
{
	text-align: center;
	font-weight: bolder;
	color: black;
	font-size: 18px;
	border: none;
	outline: none;
	text-decoration: none;
}


.btn_contador {
	
	display: flex;
	flex-wrap: wrap;
	justify-content: space-evenly;
	
}


#finalizar {

	height: 110px;
	width: 110px;
	margin-top: 180px;
	margin-left: 0px;

	text-align: center;
	font-weight: bolder;
	color: black;
	font-size: 18px;
}

/*sacola*/

#dialog_sacola{

	height: 50%;
	width: 50%;
	
}

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

#cpf_reg, #date_reg, #rua_reg, #numero_reg, #validade_reg, #cvv_reg
{
    height:45px;
    width: 180px;
}

.personal_info, .endereco
{
    display: grid;
    margin: auto;
    grid-column-gap: 10px;
    grid-template-columns: repeat(2, 1fr);
}

#btn_endereco, #btn_pagamento, #btn_selecionar_endereco
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

#btn_endereco:hover, #btn_pagamento:hover, #btn_selecionar_endereco:hover
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

.dialog_dados,.dialog_pagamento,.dialog_sacola,.dialog_endereco,.dialog_add_endereco,.dialog_editar_endereco,.dialog_add_pagamento
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

.id_endereco_card
{
	display:none;
}

.card_click,.card
{
	text-decoration:none;
	color: black;
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

#limpar_sacola
{
	border-radius:3px;
	font-weight: bolder;
	color: white;
	background-color: red;
	cursor: pointer;
	border:none;
}


.limpa
{
	text-align: center;
	margin-bottom: 10px;
}