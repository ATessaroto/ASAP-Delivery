<?php

session_start();
include("../0.Global/connection.php");
include("../0.Global/functions.php");

    $user_name = $_POST['nome_reg'];
    $cpf = $_POST['cpf_reg'];
    $data_nascimento = $_POST['date_reg'];
    $email = $_POST['email_log'];

    $password = $_POST['password_log'];
    $new_password = $_POST['new_password_log'];

    $id = $_POST['id_user'];

    
    if( !empty($user_name) && !empty($cpf) && !empty($data_nascimento) && !empty($email) && empty($password) && empty($new_password))
    {
        $sql = "UPDATE usuario SET nome_completo = '$user_name', CPF = '$cpf', data_nascimento = '$data_nascimento', email ='$email' WHERE id_user = '$id';";

        $results = mysqli_query($con,$sql);
        header('Location: /conexao_sql/3.Home/inicio.php?sucess=attsucesso');
    }
    if( !empty($user_name) && !empty($cpf) && !empty($data_nascimento) && !empty($email) && !empty($password) && !empty($new_password))
    {
        $sql = "UPDATE usuario SET nome_completo = '$user_name', CPF = '$cpf', data_nascimento = '$data_nascimento', email ='$email', senha='$new_password' WHERE id_user = '$id' AND senha = '$password';";

        $results = mysqli_query($con,$sql);
        header('Location: /conexao_sql/3.Home/inicio.php?sucess=attsucesso2');
    }
    else
    {
        header('Location: /conexao_sql/3.Home/inicio.php?error=faltandoDados');
    }

?>