<?php
    session_start();
    include("../../conexao_sql/0.Global/connection.php");
    include("../../conexao_sql/0.Global/functions.php");

    $user_data = check_login($con);
    $id_user = $user_data['id_user'];

    
    if (isset($_GET['id'])) 
    {
        $id_pagamento = $_GET['id'];
        $sql = 'SELECT * FROM pagamento p JOIN tipo_pagamento tp ON p.id_tipo_pagamento = tp.id_tipo_pagamento WHERE id_pagamento ="'.$id_pagamento.'";';
        $edit_pagamento= mysqli_query($con,$sql);
        $row= mysqli_fetch_assoc($edit_pagamento);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>  
    <meta charset="UTF-8">
    <title>Asap Delivery</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fe76b256b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style_edit.php">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
</head>
<body>
    <div class="spacing"></div>
    <form class="form_endereco_edit_del" action="../0.Global/edit_pagamento_user.php" method="POST">
        <h1 id="titulo">Edite  seu Pagamento:</h1>

        <?php echo '<input type="text" name="id_pagamento" id="id_pagamento" value="'.$row["id_pagamento"].'" >'?>

        <?php echo
            '<select id="cmbTipo_pagamento" name="cmbTipo_pagamento">
                <option value="'.$row["id_tipo_pagamento"].'" >'.$row["tipo_pagamento"].'</option>
                <option value="1" >Crédito</option>
                <option value="2" >Débito</option>
            </select>'
        ?>

        <div class="complemento">
        <?php echo '<input type="text" name="numero_cartao_reg" placeholder="Número cartão" id="numero_cartao_reg" value="'.$row["numero_cartao"].'" required>' ?>
        </div>

        <div class="endereco">
        <?php echo '<input type="text" name="validade_reg" placeholder="Validade" id="validade_reg" required value="'.$row["validade"].'" required>' ?>
        <?php echo '<input type="text" name="cvv_reg" placeholder="CVV" id="cvv_reg" value="'.$row["CVV"].'" required>'?>
        </div>

        <div class="complemento">
        <?php echo '<input type="text" name="nome_titular_reg" placeholder="Nome do Titular" id="nome_titular_reg" value="'.$row["nome_titular"].'" required>'?>
        </div>

        <div class="complemento">
        <?php echo '<input type="text" name="CPF_titular" placeholder="CPF do Titular" id="CPF_titular" value="'.$row["CPF_titular"].'" required>'?>
        </div>
        <div class="div_btn">
            <button type="submit" class="btn_submit" id="btn_delete" name="send" value="delete"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
            <button type="submit" class="btn_submit" id="btn_editar_endereco" name="send" value="update">Editar Pagamento</button>
        </div>

        <a href="../3.Home/inicio.php" id="redirect_edit" class="edit">Voltar</a>
        
    </form>
</body>
</html>