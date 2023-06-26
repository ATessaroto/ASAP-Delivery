<?php
    session_start();
    include("../../conexao_sql/0.Global/connection.php");
    include("../../conexao_sql/0.Global/functions.php");

    $user_data = check_login($con);
    $id_user = $user_data['id_user'];
    $id_pagamento = $_POST['cmbTipo_pagamento'];
    $id_endereco = $_POST['cmbendereco'];

    $sql_pedido = 'SELECT id_pedido FROM pedido WHERE id_user ="'.$id_user.'" and status = 1 ;';
    $results = mysqli_query($con,$sql_pedido);

    $id_pedido = mysqli_fetch_assoc($results);



    $sql = 'SELECT valor_item FROM item_pedido WHERE id_pedido="'.$id_pedido['id_pedido'].'";';
    $results2 = mysqli_query($con,$sql);

    $valor_total = mysqli_fetch_assoc($results2);

    $sum = $valor_total['valor_item'];
   
    $fechar_sacola = 'UPDATE pedido SET id_endereco_entrega = "'.$id_endereco.'", id_pagamento = "'.$id_pagamento.'", valor_total = "'.$sum.'", data_pedido = current_timestamp(), status= 0';
    $results4 = mysqli_query($con,$fechar_sacola);

    header('Location: /conexao_sql/3.Home/inicio.php?sucesso=sacola');

?>