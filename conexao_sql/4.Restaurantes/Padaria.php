<?php
  session_start();
  include("../../conexao_sql/0.Global/connection.php");
  include("../../conexao_sql/0.Global/functions.php");

  $user_data = check_login($con);
  $id_user = $user_data['id_user'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://kit.fontawesome.com/fe76b256b3.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="../4.Restaurantes/restaurantes.css" />
      <title>Restaurantes</title>
  </head>
  <body>
      <!--Começo Header-->
      <section id="header">
        <a href="/conexao_sql/3.Home/inicio.php" id="logo"><img id="img_logo" src="../3.Home/Imagens/logo-ASAP.png" alt="logo"></a>

        <ul id="buttons">
            <li class="btn" id="btn_inicio"><a class="link_btn" href="../3.Home/inicio.php">ínicio</a></li>
            <li class="btn" id="btn_restaurante"><a class="link_btn" id="btn_restaurante_id" href="../4.Restaurantes/restaurantes.php">Restaurantes</a></li>
            <li class="btn" id="btn_categoria"><a class="link_btn" href="../5.Categoria/Categorias.php">Categorias</a></li>
        </ul>

        <div class="input_pesquisa">
            <i class="fa-solid fa-magnifying-glass" style="color:gray;"></i>
            <input type="search" onclick="SubmitEvent" id="pesquisa" name="pesquisa"
                placeholder="Pesquise por Item...">
        </div>

    </section> 
    <!--Fim Header-->
    <main>
            <div class="col-info">
              <img id="logo_restaurante" src="..//4.Restaurantes/img/Padaria Faustino padaria logo preto e bege.png" alt="">
              <p id="nome_logo">Padaria do Faustino</p>
            </div>
            <div class="col1">
             
              <div class="card sacola-add" id="12" data-name="Croissant">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=12">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/pao.jpg">
                </div>
                <div class="card-content">
                  <p>Croissant</p>
                </div>
              </a>
              </div>
             
              <div class="card sacola-add" id="13" data-name="Pão de Queijo">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=13">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/pao de queijo.jpg">
                </div>
                <div class="card-content">
                  <p>Pão de Queijo </p>
                </div>
              </a>
              </div>
             
              <div class="card sacola-add" id="14" data-name="Coca">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=14">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/coca.jpg">
                </div>
                <div class="card-content">
                  <p>Coca</p>
                </div>
               </div>  
              </a>
            </div>

    </main>
  </body>
  <script src="../0. Global/js/modal.js"></script> <!--Sempre copiar esse onde tiver o nav-->
</html>