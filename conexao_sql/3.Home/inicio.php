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
    <link rel="stylesheet" href="./style.php">
    <link rel="stylesheet" href="./slider.php">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <!--Começo Header-->
    <section id="header">
        <a href="/conexao_sql/3.Home/inicio.php" id="logo"><img id="img_logo" src="./Imagens/logo-ASAP.png" alt="logo"></a>

        <ul id="buttons">
            <li class="btn" id="btn_inicio"><a class="link_btn" id="btn_inicio_id" href="../3.Home/inicio.php">ínicio</a></li>
            <li class="btn" id="btn_restaurante"><a class="link_btn" href="../4.Restaurantes/restaurantes.php">Restaurantes</a></li>
            <li class="btn" id="btn_categoria"><a class="link_btn" href="../5.Categoria/Categorias.php">Categorias</a></li>
        </ul>

        <div class="input_pesquisa">
            <i class="fa-solid fa-magnifying-glass" style="color:gray;"></i>
            <input type="search" onclick="SubmitEvent" id="pesquisa" name="pesquisa"
                placeholder="Pesquise por Item...">
        </div>

        <div class="end">
            <ul class='navArea'>
                <li><a><i id="user" class="fa-solid fa-user"></i>Usuário</a>
                    <ul class="sub-menu">
                        <li class="dropdown_li"><a href="#">Pedidos</a></li>
                        <li class="dropdown_li"><a class="pagamento">Pagamentos</a></li>
                        <li class="dropdown_li"><a class="endereco">Endereços</a></li>
                        <li class="dropdown_li"><a class="meus_dados">Meus dados</a></li>
                        <li class="dropdown_li"><a href="../0.Global/logoutUser.php">Sair</a></li>
                    </ul>
                </li>
                <li><a class="sacola"><i id="bag" class="fa-solid fa-bag-shopping"></i>Sacola</a></li>
            </ul>
        </div>

        <dialog class="dialog_endereco"> <!--Modal endereços-->
        <?php
            if(isset($_GET['sucess']))
            {
                if($_GET['sucess'] == 'att_endereco_sucesso')
                {
                    
                    echo '<script type="text/javascript"> window.alert("Endereço Atualizado com sucesso!!")</script>';;
                    
                }
                if($_GET['sucess'] == 'delete_endereco_sucesso')
                {
                    
                    echo '<script type="text/javascript"> window.alert("Endereço excluído com sucesso!!")</script>';;
                    
                }
            }
        ?>
        <h1 id="titulo">Endereços Cadastrados:</h1>
            <?php
                while($row= mysqli_fetch_assoc($results)){
            ?>
                <div class="endereco_usuario">
                    <a class="card_click" href="../3.Home/editar_endereco.php?id=<?php echo $row["id_endereco"] ?>">
                        <div class="card">
                            <p class="id_endereco_card"><?php echo $row["id_endereco"] ?></p>
                            <div class="titulo">
                                <i class="fa-solid fa-location-dot" id="icone_endereco"></i>
                                <p class="texto_titulo"><?php echo $row["endereco"] ?> <?php echo $row["numero"] ?></p>
                            </div>
                            <div class="sub_titulo">
                                <p id="texto_subtitulo"><?php echo $row["complemento"] ?> - <?php echo $row["cidade"] ?> - <?php echo $row["CEP"] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
                }
            ?>

            <button type="button" class="btn_endereco" id="btn_endereco">Adicionar endereço</button>
        </dialog>

        
        <dialog class="dialog_pagamento"> <!--Modal Pagamentos-->  
        
        <?php
            if(isset($_GET['sucess']))
                {
                    if($_GET['sucess'] == 'att_pagamento_sucesso')
                    {
                        
                        echo '<script type="text/javascript"> window.alert("Pagamento Atualizado com sucesso!!")</script>';;
                        
                    }
                    if($_GET['sucess'] == 'delete_pagamento_sucesso')
                    {
                        
                        echo '<script type="text/javascript"> window.alert("Pagamento excluído com sucesso!!")</script>';;
                        
                    }
                }
        ?>
        <h1 id="titulo">Pagamentos Cadastrados:</h1>
            <?php
                while($row= mysqli_fetch_assoc($results2)){
            ?>
                <div class="endereco_usuario">
                    <a class="card_click" href="../3.Home/editar_pagamento.php?id=<?php echo $row["id_pagamento"] ?>">
                        <div class="card">
                            <p class="id_endereco_card"><?php echo $row["id_pagamento"] ?></p>
                            <div class="titulo">
                                <i  class="fa-sharp fa-solid fa-money-bill" id="icone_endereco"></i>
                                <p class="texto_titulo"><?php echo $row["tipo_pagamento"] ?> - <?php echo $row["validade"] ?></p>
                            </div>
                            <div class="sub_titulo">
                                <p id="texto_subtitulo"><?php echo $row["nome_titular"] ?> - <?php echo $row["CPF_titular"] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
                }
            ?>

            <button type="button" class="btn_pagamento" name="btn_pagamento" id="btn_pagamento">Adicionar pagamento</button>
        </dialog>

        <dialog class="dialog_dados"> <!--Modal Dados do usuário-->

            <?php
                if(isset($_GET['error'])){
                if($_GET['error'] == 'faltandoDados')
                {
                    
                    echo '<script type="text/javascript"> window.alert("Preencha os campos corretamente!")</script>';;
                    
                }}

                if(isset($_GET['sucess'])){
                    if($_GET['sucess'] == 'attsucesso')
                    {
                        
                        echo '<script type="text/javascript"> window.alert("Dados Atualizados com sucesso!")</script>';
                    }
                }

                if(isset($_GET['sucess'])){
                    if($_GET['sucess'] == 'attsucesso2')
                    {
                        
                        echo '<script type="text/javascript"> window.alert("Dados Atualizados com sucesso!")</script>';
                    }
                }
            ?>

            <form class="form_att" action="../0.Global/updateUser.php" method="POST">
                <h1 id="titulo">Atualizar Seus Dados:</h1>

                <?php echo '<input type="text" name="id_user" id="id_user" value="'.$id_user.'">'?>

                <?php echo '<input type="text" name="nome_reg" placeholder="Nome Compelto" id="nome_reg" value="'.$user_data['nome_completo'].'" required>'?>
                <div class="personal_info">
                    <?php echo '<input type="text" name="cpf_reg" placeholder="CPF" id="cpf_reg" value="'.$user_data['CPF'].'" required>'?>
                    <?php echo '<input type="date" name="date_reg" placeholder="Data de Nascimento" id="date_reg" max="2005-06-23" value="'.$user_data['data_nascimento'].'" required>'?>
                </div>

                <?php echo '<input type="email" name="email_log" placeholder="E-mail" id="mail_log" value="'.$user_data['email'].'" required>'?>
            
                <div class="senha">
                    <input type="password" name="password_log" placeholder="Senha" id="pass_log" >
                </div>

                <div class="senha">
                    <input type="password" name="new_password_log" placeholder="Nova Senha" id="new_pass_log" >
                </div>

                <button type="submit" class="btn_submit" id="btn_registro">Atualizar</button>
            </form>

        </dialog>

        <dialog class="dialog_add_endereco"> <!--Modal Add Endereço-->

                <?php
                    if(isset($_GET['sucess'])){
                        if($_GET['sucess'] == 'attsucesso3'){
                            
                            echo '<script type="text/javascript"> window.alert("Endereço Criado com sucesso!")</script>';
                            
                        }
                    }
                ?>

            <form class="form_att" action="../0.Global/add_endereco_user.php" method="POST">
                <h1 id="titulo">Adicione seu endereço:</h1>

                <?php echo '<input type="text" name="id_user" id="id_user" value="'.$id_user.'">'?>

                <input type="text" name="cep_reg" placeholder="CEP" id="cep_reg" required>

                <div class="endereco">
                    <input type="text" name="rua_reg" placeholder="Endereço (Rua)" id="rua_reg" required>
                    <input type="text" name="numero_reg" placeholder="Número" id="numero_reg" required>
                </div>

                <div class="complemento">
                    <input type="text" name="comp_reg" placeholder="Complemento" id="comp_reg" >
                </div>

                <div class="complemento">
                    <input type="text" name="cidade_reg" placeholder="Cidade" id="cidade_reg" required>
                </div>
                
                <button type="submit" class="btn_submit" id="btn_endereco">Adicionar Endereço</button>
            </form>

        </dialog>

        <dialog class="dialog_add_pagamento"> <!--Modal Add Pagamento-->

            <?php
                if(isset($_GET['sucess'])){
                    if($_GET['sucess'] == 'attsucessoP'){
                        
                        echo '<script type="text/javascript"> window.alert("Pagamento Criado com sucesso!")</script>';
                        
                    }
                }
            ?>

            <form class="form_att" action="../0.Global/add_pagamento_user.php" method="POST">
                <h1 id="titulo">Adicione seu Pagamento:</h1>

                <?php echo '<input type="text" name="id_user" id="id_user" value="'.$id_user.'">'?>

                <select id="cmbTipo_pagamento" name="cmbTipo_pagamento">
                    <option value="1" >Crédito</option>
                    <option value="2" >Débito</option>
                </select>

                <div class="complemento">
                    <input type="text" name="numero_cartao_reg" placeholder="Número cartão" id="numero_cartao_reg" >
                </div>

                <div class="endereco">
                    <input type="text" name="validade_reg" placeholder="Validade" id="validade_reg" required>
                    <input type="text" name="cvv_reg" placeholder="CVV" id="cvv_reg" required>
                </div>

                <div class="complemento">
                    <input type="text" name="nome_titular_reg" placeholder="Nome do Titular" id="nome_titular_reg" required>
                </div>

                <div class="complemento">
                    <input type="text" name="CPF_titular" placeholder="CPF do Titular" id="CPF_titular" required>
                </div>

                <button type="submit" class="btn_submit" id="btn_endereco">Adicionar Pagamento</button>
            </form>

        </dialog>
        

        <dialog class="dialog_sacola"> <!--Modal Sacola-->

        <?php if(isset($_GET['sucess'])){
                    if($_GET['sucess'] == 'delete_sacola_sucesso')
                    {
                        
                        echo '<script type="text/javascript"> window.alert("Sacola esvaziada com sucesso!")</script>';
                    }
                }
        ?>
        <?php
                    if(isset($_GET['sucesso'])){
                        if($_GET['sucesso'] == 'sacola'){
                            
                            echo '<script type="text/javascript"> window.alert("Pedido realizado com sucesso!")</script>';
                            
                        }
                    }
                ?>

        <form action="../0.Global/continuar_sacola.php" method="POST">
            <h1 id="titulo">Sua sacola:</h1>
            <?php
                while($row= mysqli_fetch_assoc($results3)){
            ?>
                <div class="endereco_usuario">
                    <a  id="id_item_pedido" class="card_click" href="../3.Home/editar_item.php?id=<?php echo $row["id_item_pedido"] ?>">
                        <div class="card">
                            <p class="id_endereco_card"><?php echo $row["id_item"] ?></p>
                            <div class="titulo">
                                <i class="fa-solid fa-location-dot" id="icone_endereco"></i>
                                <p class="texto_titulo"><?php echo $row["nome_item"] ?> - R$<?php echo $row["valor_item"] ?></p>
                            </div>
                            <div class="sub_titulo">
                                <p id="texto_subtitulo"> Quantidade: <?php echo $row["quantidade"] ?></p>
                            </div>
                        </div>
                    </a>
                </div>  
            <?php
                }
            ?>
            <div class="limpa">
                <button type="submit" name="send" value="delete" id="limpar_sacola" class="limpar">Limpar Sacola</button> 
            </div>
        </form>
            <a href="./fechar_sacola.php"><button class="btn_submit"  id="btn_selecionar_endereco">Continuar</button></a>

        </dialog>

    </section> 
    <!--Fim Header-->
    <section id="carousel" class="carousel">
        <div class="slides">
            <div class="slide" data-state="active"><img class="slide-image" src="./Imagens/1.png" alt=""></div>
            <div class="slide"><img class="slide-image" src="./Imagens/2.png" alt=""></div>
            <div class="slide"><img class="slide-image" src="./Imagens/3.png" alt=""></div>
        </div>
        <div class="indicators">
            <input class="indicator" name="indicator" data-slide="1" data-state="active" checked type="radio" />
            <input class="indicator" name="indicator" data-slide="2" type="radio" />
            <input class="indicator" name="indicator" data-slide="3" type="radio" />
        </div>
    </section>

</body>
<script src="./slider.js"></script>
<script src="../0.Global/js/modal.php"></script> <!--Sempre copiar esse onde tiver o nav-->
</html>