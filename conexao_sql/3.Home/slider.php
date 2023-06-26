<?php
	header("Content-type: text/css");
?>

.carousel {
    
    height: 400px;
    width: 850px;
    padding-top: 0;
  }
  
  .slides {
    height: 100%;
    width: 926px;
    margin: auto;
    position: relative;
  }
  
  .slide {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 926px;
    font-size: 3em;
    color: white;
    line-height: 400px;
    text-align: center;
    opacity: 0;
    margin: auto;
    transition: opacity 1000ms;
  }
  
  
  .slide[data-state=active] 
  {
    display: block;
  }
  
  .indicators 
  {
    width: 926px;
    margin: auto;
    text-align: center;
    position: absolute;
    display: inline-block; 
    padding-left: 10px;
    padding-top: 15px;
  }
  
  .indicator 
  {
      cursor: pointer;
  }

  .slide-image
  {
    width: 926px !important;
    height: 551px !important;
    margin: auto;
  }

  #carousel
  {
    width: 926px !important;
    height: 551px !important;
  
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



