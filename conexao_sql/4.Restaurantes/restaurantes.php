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

      <?php
        if(isset($_GET['sucess'])){
        if($_GET['sucess'] == 'add_item_sucess')
        {
            
          echo '<script type="text/javascript"> window.alert("Item Adicionado na sacola com sucesso!!")</script>';
            
        }}
      ?> 
      <div class="col1">
        <a href="Pizzaria.php">
        <div class="card">
          <div class="img_container">
            <img class="card-image" src="../4.Restaurantes/img/Pizzaria.png">
          </div>
          <div class="card-content">
            <p>Pizza Master</p>
          </div>
        </a>
        </div>
        <a href="Boa-Marmita.php">
        <div class="card">
          <div class="img_container">
            <img class="card-image" src="../4.Restaurantes/img/Boa Marmita.jpeg">
          </div>
          <div class="card-content">
            <p>Boa Marmita </p>
          </div>
        </a>
        </div>
        <a href="Churrascaria.php">
        <div class="card">
          <div class="img_container">
            <img class="card-image" src="../4.Restaurantes/img/Churrascaria.jpeg">
          </div>
          <div class="card-content">
            <p>Churrascaria Estrela</p>
          </div>
        </a>
        </div>  
        <a href="Padaria.php">
        <div class="card">
          <div class="img_container">
            <img class="card-image" src="../4.Restaurantes/img/Padaria Faustino padaria logo preto e bege.png">
          </div>
          <div class="card-content">
            <p>Padaria Faustino</p>
          </div>
        </a>
        </div>
        <a href="Divina-marmita.php">
        <div class="card">
          <div class="img_container">
            <img class="card-image" src="../4.Restaurantes/img/Marmitex_logo.png">
          </div>
          <div class="card-content">
            <p>Divina Marmitex</p>
          </div>
        </div>
      </a>
      </div>

    </main>
  </body>
  <script src="../0. Global/js/modal.php"></script> <!--Sempre copiar esse onde tiver o nav-->
</html>