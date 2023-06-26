<?php

session_start();
include("../0.Global/connection.php");
include("../0.Global/functions.php");

    $user_data = check_login($con);
    $id_user = $user_data['id_user'];

    $query_catch_id = "select id_pedido from pedido where id_user = '$id_user' AND status = 1";
    $result_catch = mysqli_query($con, $query_catch_id);
    
    $dados = mysqli_fetch_assoc($result_catch); 

    $id_pedido = $dados['id_pedido'];
    
    $sql = "DELETE FROM item_pedido WHERE id_pedido='$id_pedido';";
    $results = mysqli_query($con,$sql);

    $sql2 = "DELETE FROM pedido WHERE id_user = '$id_user' and status = 1";
    $results2 = mysqli_query($con,$sql);
    
    header('Location: /conexao_sql/3.Home/inicio.php?sucess=delete_sacola_sucesso');

?>