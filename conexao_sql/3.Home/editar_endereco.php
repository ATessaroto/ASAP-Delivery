<?php
    session_start();
    include("../../conexao_sql/0.Global/connection.php");
    include("../../conexao_sql/0.Global/functions.php");

    $user_data = check_login($con);
    $id_user = $user_data['id_user'];

    
    if (isset($_GET['id'])) 
    {
        $id_endereco = $_GET['id'];
        $sql = 'SELECT * FROM endereco_user WHERE id_endereco ="'.$id_endereco.'";';
        $edit_endereco = mysqli_query($con,$sql);
        $row= mysqli_fetch_assoc($edit_endereco);
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
    <form class="form_endereco_edit_del" action="../0.Global/edit_endereco_user.php" method="POST">
        <h1 id="titulo">Edite  seu endereço:</h1>

        <?php echo '<input type="text" name="id_endereco" id="id_endereco" value="'.$row["id_endereco"].'" >'?>

        <?php echo '<input type="text" name="cep_reg" placeholder="CEP"  id="cep_reg" value="'.$row["CEP"].'" required>'?>

        <div class="endereco">
            <?php echo  '<input type="text" name="rua_reg" placeholder="Endereço (Rua)" id="rua_reg" value="'.$row["endereco"].'" required>'?>
            <?php echo  '<input type="text" name="numero_reg" placeholder="Número" id="numero_reg" value="'.$row["numero"].'" required>' ?>
        </div>

        <div class="complemento">
        <?php echo '<input type="text" name="comp_reg" placeholder="Complemento" id="comp_reg" value="'.$row["complemento"].'">' ?>
        </div>

        <div class="complemento">
        <?php echo '<input type="text" name="cidade_reg" placeholder="Cidade" id="cidade_reg" value="'.$row["cidade"].'" required>' ?>
        </div>

        <div class="div_btn">
            <button type="submit" class="btn_submit" id="btn_delete" name="send" value="delete"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
            <button type="submit" class="btn_submit" id="btn_editar_endereco" name="send" value="update">Editar Endereço</button>
        </div>

        <a href="../3.Home/inicio.php" id="redirect_edit" class="edit">Voltar</a>
        
    </form>
</body>
</html>
