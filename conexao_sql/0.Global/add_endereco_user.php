<?php

    session_start();
    include("../0.Global/connection.php");
    include("../0.Global/functions.php");

    $id = $_POST['id_user'];
    $cep = $_POST['cep_reg'];
    $rua = $_POST['rua_reg'];
    $numero = $_POST['numero_reg'];
    $comp = $_POST['comp_reg'];
    $cidade = $_POST['cidade_reg'];

    $sql = "insert into endereco_user (id_user,CEP,endereco,numero,complemento,cidade) values ('$id','$cep','$rua','$numero','$comp','$cidade')";

    $results = mysqli_query($con,$sql);
    header('Location: /conexao_sql/3.Home/inicio.php?sucess=attsucesso3');


?>