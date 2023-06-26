<?php

session_start();
include("../0.Global/connection.php");
include("../0.Global/functions.php");

    $cep = $_POST['cep_reg'];
    $endereco = $_POST['rua_reg'];
    $numero = $_POST['numero_reg'];
    $complemento = $_POST['comp_reg'];
    $cidade = $_POST['cidade_reg'];

    $id = $_POST['id_endereco'];

    
    if( !empty($cep) && !empty($endereco) && !empty($numero) && !empty($cidade))
    {
        if($_POST['send']=='update')
        { 
            $sql = "UPDATE endereco_user SET CEP = '$cep', endereco = '$endereco', numero = '$numero', complemento ='$complemento', cidade ='$cidade' WHERE id_endereco = '$id';";

            $results = mysqli_query($con,$sql);
            header('Location: /conexao_sql/3.Home/inicio.php?sucess=att_endereco_sucesso');
        } 
        else 
        {
            $sql = "DELETE FROM endereco_user WHERE id_endereco = '$id';";
            $results = mysqli_query($con,$sql);
            
            header('Location: /conexao_sql/3.Home/inicio.php?sucess=delete_endereco_sucesso');
        }

        
    }

?>