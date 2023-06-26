<?php

    session_start();
    include("../0.Global/connection.php");
    include("../0.Global/functions.php");

    $id = $_POST['id_pagamento'];
    $tipo_pagamento = $_POST['cmbTipo_pagamento'];
    $numero_cartao = $_POST['numero_cartao_reg'];
    $validade = $_POST['validade_reg'];
    $cvv = $_POST['cvv_reg'];
    $nome_titular = $_POST['nome_titular_reg'];
    $cpf_titular = $_POST['CPF_titular'];

        
    if( !empty($cvv))
    {
        if($_POST['send']=='update')
        { 
            $sql = "UPDATE pagamento SET 
                    id_tipo_pagamento = '$tipo_pagamento',
                    numero_cartao = '$numero_cartao',
                    validade = '$validade',
                    CVV ='$cvv',
                    nome_titular ='$nome_titular',
                    CPF_titular ='$cpf_titular' 
                    WHERE id_pagamento = '$id';";

            $results = mysqli_query($con,$sql);
            header('Location: /conexao_sql/3.Home/inicio.php?sucess=att_pagamento_sucesso');
        } 
        else 
        {
            $sql = "DELETE FROM pagamento WHERE id_pagamento = '$id';";
            $results = mysqli_query($con,$sql);
            
            header('Location: /conexao_sql/3.Home/inicio.php?sucess=delete_pagamento_sucesso');
        }

        
    }

?>