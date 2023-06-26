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
              <img id="logo_restaurante" src="..//4.Restaurantes/img/Logo-Carnes.png" alt="">
              <p id="nome_logo">Carnes</p>
            </div>
            <div class="col1">
             
              <div class="card sacola-add" data-name="Bife Suculento">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/bife-suculento.png">
                </div>
                <div class="card-content">
                  <p>Bife Suculento</p>
                </div>
             
              </div>
             
              <div class="card sacola-add" data-name="Mignon">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img/mignon.png">
                </div>
                <div class="card-content">
                  <p>Mignon </p>
                </div>
              
              </div>
             
              <div class="card sacola-add" data-name="Frango Assado">
                <div class="img_container">
                  <img class="card-image" src="../4.Restaurantes/img//Frango.png">
                </div>
                <div class="card-content">
                  <p>Frango Assado</p>
                </div>
              </div>  
            </div>

    </main>
  </body>
  <script src="../0. Global/js/modal.js"></script> <!--Sempre copiar esse onde tiver o nav-->
</html>