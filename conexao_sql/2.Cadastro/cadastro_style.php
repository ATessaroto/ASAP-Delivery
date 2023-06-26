<?php
    header("Content-type: text/css");
?>

body
{
    
    background-image: url(Fundo_registro.png);
    background-attachment: fixed;
    background-position: right top;
    background-size: 100%;
    outline: none;
    display: block;
    margin: auto;
    text-align: center;
    padding-top: 50px;
    padding-left: 150px;
}

img
{
    height: 100px;
    width: 140px;
    padding-left: 20px;
    padding-top: 20px;
}

#container_log
{
    display: grid;
    justify-content: center;
    align-content: center;
    text-align: center;
    width: 445px;
    height: 450px;
    margin: auto;
    border-style: solid;
    border-radius: 13px;
    border-width: 1px;
    border-color:rgb(212, 212, 212);
    background: white;
    background-color: rgba(255, 255, 255, 0.8);
    box-shadow: 5px 10px 7px rgb(248, 242, 242);
}

input
{
    width: 100%;
    padding: 5px 10px;
    box-sizing: border-box;
}

input
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

input::placeholder, input::placeholder[type="date"]
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

#cpf_reg, #date_reg
{
    height:45px;
    width: 183px;
}

.personal_info
{
    display: grid;
    margin: auto;
    grid-column-gap: 10px;
    grid-template-columns: repeat(2, 1fr);
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

button[disabled] {
    opacity: 0.9;
}

.error{
    
    color: rgb(0, 0, 0);
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    width: 380px;
    height: 25px;
    margin: auto;
    text-align: start;
    padding-top: 10px;
    padding-left: 10px;
    display: none;
} 

#sucesso
{
    
    color: rgb(0, 0, 0);
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    width: 380px;
    height: 25px;
    margin: auto;
    text-align: start;
    padding-top: 10px;
    padding-left: 10px;
} 

.log_erro
{
    display: inline-block;
    align-self: flex-end;
    justify-content: space-between;
    background: #ffc72c;
    border-radius: 5px;
}

.spacing
{
    height: 15px;
}

#redirect_registro
{
    color: #ffc72c;
    text-decoration: none;
    font-weight: bold;
    font-family: Arial;
    margin-top:15px;
    font-size: 13px;
}

#redirect_registro:hover
{
    color: #fcd874;
}