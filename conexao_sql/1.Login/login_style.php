<?php
    header("Content-type: text/css");
?>

*
{
    background-image: url(Fundo_login.png);
    background-attachment: fixed;
    background-position: right top;
    background-size: 100%;
    background-repeat:no-repeat;
    outline: none;
}

#container_log
{
    display: grid;
    justify-content: center;
    align-content: start;
    text-align: center;
    width: 480px;
    height: 450px;
    margin: 0 auto;
    margin-left: 48%;
    position: absolute;

    border-style: solid;
    border-radius: 13px;
    border-width: 1px;
    border-color:rgb(212, 212, 212);
    background: white;
    background-color: rgba(255, 255, 255, 0.8);
    box-shadow: 7px 15px 12px rgb(248, 242, 242);
}

#bem_vindo
{
    font-size: 26px;
    font-weight:bold;
    font-family:Arial;
    margin-top:73px;   
    color: rgb(0, 0, 0) ;
    background: none;
}

input[type=email],input[type=password] 
{
    width: 100%;
    padding: 5px 10px;
    box-sizing: border-box;
}

#mail_log,#pass_log
{
    height:45px;
    width: 375px;
    
    background: #fcfbfb;
    border-style: none;
    font-size: 16px;
    font-weight: 100;
    color: rgb(39, 39, 39);
}

.user,.password
{   
    height:45px;
    width: 400px;
    display: inline-block;
    padding-left: 5px;

    background: #fcfbfb;
    border-style: solid;
    border-radius: 4px;
    border-width: 0.5px;
    border-color:rgb(200, 218, 218);
}

i
{
   background: transparent;
}

#mail_log::placeholder,#pass_log::placeholder
{
    padding: 3px;
}
  

/*
.cmb
{
    display: grid;
    height: 65px;
    text-align: start;
    background: transparent;
    font-family:Arial;
    font-size: 13px;
    padding-bottom: 15px;
}

#label_cmb
{
    background: none;
    font-size: 14px;
    margin: 0;
    padding-left: 5px;
}

#cmb_tipo_user
{
    background:  #fcfbfb;
    height: 40px;
    font-size: 14px;
    padding-left: 5px;

    border-style: solid;
    border-radius: 2px;
    border-width: 1px;
    border-color:rgb(200, 218, 218);
}
*/

.lembrar_email
{
    background: none;
    font-family: Arial;
    font-weight: bold;
    font-size: 13px;
    text-align: start;
    padding-bottom: 15px;
}

#lbl_mail
{
    background: none;
}

.lembrar_email input
{
    height: 15px;
    width: 15px;
    background-color: #eee;
}

#btn_login
{
    height: 45px;
    border-radius: 5px;    
    border: none;
    background: #ffc72c;
    font-weight: bold;
    font-size: 16px;
    margin-top: 15px;
    cursor: pointer;
}

#btn_login:hover
{
    background-color: #fcd874;
}

.registro
{
    display: inline-block;
    background: none;
    font-family:Arial;
    font-size: 13px;
    margin-top: 10px;
}

#redirect_registro
{
    color: #ffc72c;
    text-decoration: none;
    font-weight: bold;
}

#redirect_registro:hover
{
    color: #fcd874;
}


#erro
{
    
    color: rgb(0, 0, 0);
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    width: 380px;
    height: 25px;
    margin: auto;
    text-align: center;
    padding-top: 10px;
} 

.log_erro
{
    margin-top: 110px;
    margin-bottom: 25px;
    margin-left: 52%;
    display: inline-block;
    align-self: flex-end;
    background: #ffc72c;
    border-radius: 5px;
    text-align: center;
}
  



