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
      <link rel="stylesheet" href="../../ASAP/0. Global/js/modal.js"> <!--Sempre copiar esse onde tiver o nav-->
      <title>Restaurantes</title>
  </head>
  <body>
      <!--Começo Header-->
      <section id="header">
        <a href="/conexao_sql/3.Home/inicio.php" id="logo"><img id="img_logo" src="../3.Home/Imagens/logo-ASAP.png" alt="logo"></a>

        <ul id="buttons">
            <li class="btn" id="btn_inicio"><a class="link_btn" href="../3.Home/inicio.php">ínicio</a></li>
            <li class="btn" id="btn_restaurante"><a class="link_btn" id="btn_restaurante" href="../4.Restaurantes/restaurantes.php">Restaurantes</a></li>
            <li class="btn" id="btn_categoria"><a class="link_btn" id="btn_categoria_id" href="Categorias.php">Categorias</a></li>
        </ul>

        <div class="input_pesquisa">
            <i class="fa-solid fa-magnifying-glass" style="color:gray;"></i>
            <input type="search" onclick="SubmitEvent" id="pesquisa" name="pesquisa"
                placeholder="Pesquise por Item ou Loja...">
        </div>

    </section> 
    <!--Fim Header-->
    <main>
            <div class="col-info">
              <img id="logo_restaurante" src="..//4.Restaurantes/img/Logo-Restaurantes.png" alt="">
              <p id="nome_logo">Restaurantes</p>
            </div>
            <div class="col1">
             
              <div class="card sacola-add" data-name="Marmita Simples">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/Marmita.png">
                </div>
                <div class="card-content">
                  <p>Marmita Simples</p>
                </div>
             
              </div>
             
              <div class="card sacola-add" data-name="Marmita Top">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/Marmita-cara.png">
                </div>
                <div class="card-content">
                  <p>Marmita Top </p>
                </div>
              
              </div>

              <div class="card sacola-add" data-name="Marmita Fit">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=5">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/Marmita-saudavel.png">
                </div>
                <div class="card-content">
                  <p>Marmita Fit</p>
                </div>
              </a>
              </div>  

              <div class="card sacola-add" data-name="Varias Marmitas">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=4">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/Varias-marmitas.png">
                </div>
                <div class="card-content">
                  <p>Varias Marmitas</p>
                </div>
              </a>
              </div>  

              <div class="card sacola-add" data-name="Suco Natural">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=6">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/Suco-natural.png">
                </div>
                <div class="card-content">
                  <p>Suco Natural</p>
                </div>
              </a>
              </div>  

              <div class="card sacola-add" data-name="Sucos">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=7">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/Sucos.png">
                </div>
                <div class="card-content">
                  <p>Sucos</p>
                </div>
              </a>
              </div>  

              <div class="card sacola-add" data-name="Refris">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=11">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/refri-gelado.png">
                </div>
                <div class="card-content">
                  <p>Refris</p>
                </div>
              </a>
              </div>  

              <div class="card sacola-add" data-name="Bife Suculento">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=8">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/bife-suculento.png">
                </div>
                <div class="card-content">
                  <p>Bife Suculento</p>
                </div>
              </a>
              </div>  

              <div class="card sacola-add" data-name="Mignon">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=9">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/mignon.png">
                </div>
                <div class="card-content">
                  <p>Mignon</p>
                </div>
              </a>
              </div>  

              <div class="card sacola-add" data-name="Frango Assado">
              <a class="card_click" href="../0.Global/add_item_sacola.php?id=10">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/Frango.png">
                </div>
                <div class="card-content">
                  <p>Frango Assado</p>
                </div>
              </a>  
              </div>  

            </div>

    </main>
  </body>
  <script src="../0. Global/js/modal.js"></script> <!--Sempre copiar esse onde tiver o nav-->
</html>