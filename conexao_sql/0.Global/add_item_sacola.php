<?php
    session_start();
    include("../../conexao_sql/0.Global/connection.php");
    include("../../conexao_sql/0.Global/functions.php");

    $user_data = check_login($con);
    $id_user = $user_data['id_user'];

    
    if (isset($_GET['id'])) 
    {
        $id_item = $_GET['id'];
        $sql = 'SELECT * FROM item i WHERE id_item ="'.$id_item.'";';
        $add_item= mysqli_query($con,$sql);
        $row= mysqli_fetch_assoc($add_item);
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>  
    <meta charset="UTF-8">
    <title>Asap Delivery</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fe76b256b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../3.Home/style_edit.php">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
</head>
<body>
    <div class="spacing"></div>
    <form class="form_add_sacola" action="../0.Global/adiciona_item_sacola.php" method="POST">
        <h1 id="titulo">Adicionar a sacola</h1> 
        
        <?php echo '<input type="text" name="id_item" id="id_item" value="'.$row["id_item"].'" >'?>
        <?php echo '<input type="text" name="id_loja" id="id_loja" value="'.$row["id_loja"].'" >'?>

        <?php echo '<h2 class="nome_item">'.$row["nome_item"].'</h2>' ?>

        <?php echo '<p class="desc_item">'.$row["descricao"].'</p>' ?>

        <div>
            <?php echo '<p>Valor item:</p>'?>
            <?php echo '<input class="desc_item"  name="id_valor" id="id_valor" value="'.$row["valor"].'" readonly>' ?>
        </div>

        <?php echo '<p>Quantidade:</p>'?>
        <?php echo '<input type="text" name="quantidade" id="quantidade"  value="1" >'?>


        <div class="div_botao">
            <button type="submit" class="btn_submit" id="btn_editar_endereco" name="send" value="update">Adicionar a sacola</button>
        </div>

        <a href="../3.Home/inicio.php" id="redirect_edit" class="edit">Voltar</a>
        
    </form>
</body>
</html>