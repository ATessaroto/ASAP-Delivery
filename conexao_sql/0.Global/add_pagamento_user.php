<?php

    session_start();
    include("../0.Global/connection.php");
    include("../0.Global/functions.php");

    $id = $_POST['id_user'];
    $tipo_pagamento = $_POST['cmbTipo_pagamento'];
    $numero_cartao = $_POST['numero_cartao_reg'];
    $validade = $_POST['validade_reg'];
    $cvv = $_POST['cvv_reg'];
    $nome_titular = $_POST['nome_titular_reg'];
    $cpf_titular = $_POST['CPF_titular'];

    $sql = "insert into pagamento (id_user,id_tipo_pagamento,numero_cartao,validade,CVV,nome_titular,CPF_titular) 
            values 
            (
                '$id',
                '$tipo_pagamento',
                '$numero_cartao',
                '$validade',
                '$cvv',
                '$nome_titular',
                '$cpf_titular'
            )";

    $results = mysqli_query($con,$sql);
    header('Location: /conexao_sql/3.Home/inicio.php?sucess=attsucessoP');


?>