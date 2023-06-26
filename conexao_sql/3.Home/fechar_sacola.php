<?php
    session_start();
    include("../../conexao_sql/0.Global/connection.php");
    include("../../conexao_sql/0.Global/functions.php");

    $user_data = check_login($con);
    $id_user = $user_data['id_user'];

    $sql = 'SELECT * FROM endereco_user WHERE id_user ="'.$id_user.'";';
    $results = mysqli_query($con,$sql);

    $sql2 = 'SELECT * FROM pagamento p JOIN tipo_pagamento tp ON p.id_tipo_pagamento = tp.id_tipo_pagamento  WHERE id_user ="'.$id_user.'";';
    $results2 = mysqli_query($con,$sql2);

    $sql3 = 'SELECT * FROM pedido p 
    JOIN item_pedido ip ON p.id_pedido = ip.id_pedido
    JOIN item i ON ip.id_item = i.id_item
    WHERE id_user ="'.$id_user.'" AND status = 1;';
    $results3 = mysqli_query($con,$sql3);


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
    <form class="form_endereco_edit_del" action="../0.Global/fechar_sacola.php" method="POST">
        <h1 id="titulo">Edite  seu endereço:</h1>

        <?php
                while($row= mysqli_fetch_assoc($results3)){
            ?>
                <div class="endereco_usuario">

                        <div class="card_itens">
                            <p class="id_endereco_card"><?php echo $row["id_item"] ?></p>
                            <div class="titulo">
                                <i class="fa-solid fa-location-dot" id="icone_endereco"></i>
                                <p class="texto_titulo"><?php echo $row["nome_item"] ?> - R$<?php echo $row["valor_item"] ?></p>
                            </div>
                            <div class="sub_titulo">
                                <p id="texto_subtitulo"> Quantidade: <?php echo $row["quantidade"] ?></p>
                            </div>
                        </div>
                    
                </div>  
            <?php
                }
            ?>

            <select id="cmbTipo_pagamento" name="cmbTipo_pagamento">   
            <?php
                while($row= mysqli_fetch_assoc($results2)){
            ?>
                <option value="<?php echo $row['id_pagamento'] ?>"><?php echo $row['tipo_pagamento'] ?> - <?php echo $row['validade'] ?> </option>
            <?php
                }
            ?>
            </select>
            
            <select id="cmbendereco" name="cmbendereco"> 
            <?php
                while($row= mysqli_fetch_assoc($results)){
            ?>
                <option value="<?php echo $row['id_endereco'] ?>"><?php echo $row['endereco'] ?> - <?php echo $row['numero'] ?> </option>
            <?php
                }
            ?>
             </select>

        <div class="div_btn">
            <button type="submit" class="btn_submit" id="btn_fechar_sacola" name="send" value="update">Confirmar Pedido</button>
        </div>

        <a href="../3.Home/inicio.php" id="redirect_edit" class="edit">Voltar</a>
        
    </form>
</body>
</html>
