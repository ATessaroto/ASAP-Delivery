<?php

    session_start();
    include("../0.Global/connection.php");
    include("../0.Global/functions.php");

    $user_data = check_login($con);
    $id_user = $user_data['id_user'];

    $id_item = $_POST['id_item'];
    $id_loja = $_POST['id_loja'];
    $valor = $_POST['id_valor'];
    $quantidade = $_POST['quantidade'];
    $valorTotal = $valor * $quantidade;

    $check_pedido = "select * from pedido WHERE id_user = '$id_user' AND status = 1";

    $resultado_check = mysqli_query($con,$check_pedido);

    if($resultado_check)
    {
        if($resultado_check && mysqli_num_rows($resultado_check) <= 0)
        {

            $query = "insert into pedido (id_user,id_loja) values ('$id_user','$id_loja')";
            $result = mysqli_query($con, $query);

            $query_catch_id = "select id_pedido from pedido where id_user = '$id_user' AND status = 1";
            $result_catch = mysqli_query($con, $query_catch_id);
            
            $dados = mysqli_fetch_assoc($result_catch); 

            $id_pedido = $dados['id_pedido'];

            echo "$id_pedido";

            $query2 = "insert into item_pedido (id_pedido,id_item,quantidade,valor_item) values ('$id_pedido','$id_item','$quantidade','$valorTotal')";
            $result2 = mysqli_query($con, $query2);

            header('Location: /conexao_sql/4.Restaurantes/restaurantes.php?sucess=add_item_sucess');
        }
        if($resultado_check && mysqli_num_rows($resultado_check) >= 1)
        {

            $query_catch_id = "select id_pedido from pedido where id_user = '$id_user' AND status = 1";
            $result_catch = mysqli_query($con, $query_catch_id);
            
            $dados = mysqli_fetch_assoc($result_catch); 

            $id_pedido = $dados['id_pedido'];

            echo "$id_pedido";

            $query2 = "insert into item_pedido (id_pedido,id_item,quantidade,valor_item) values ('$id_pedido','$id_item','$quantidade','$valorTotal')";
            $result2 = mysqli_query($con, $query2);

            header('Location: /conexao_sql/4.Restaurantes/restaurantes.php?sucess=add_item_sucess');
        }
	}
?>