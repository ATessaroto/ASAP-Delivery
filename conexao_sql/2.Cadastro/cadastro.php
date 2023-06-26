<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./cadastro_style.php">
</head>
<body> 
    <div class="log_erro">
        <?php
            if(isset($_GET['success'])){
            if($_GET['success'] == 'userCreated')
            {
                
                echo '<p class="log_erro" id="sucesso">Cadastro realizado com sucesso!</p>';
                
            }}
        ?>
        <?php
            if(isset($_GET['error'])){
            if($_GET['error'] == 'userCrateFailed')
            {
                
                echo '<p class="log_erro" id="sucesso">Não foi possível criar o usuário</p>';
                
            }}
        ?>
        <div class="error" id="email-required-error">Email é obrigatório!</div>
        <div class="error" id="email-invalid-error">Email é inválido!</div>
        <div class="error" id="password-required-error">Senha deve possuir 8 Caracteres!</div> 
    </div>
    <div class="spacing"></div> 
    <div class="display" id="container_log">

        <form action="../0.Global/insertUser.php" method="post">
            <p class="titulo">Preencha seus Dados:</p>
        
            <input type="text" name="nome_reg" placeholder="Nome Compelto" id="nome_reg" required>
        
            <div class="personal_info">
                <input type="text" name="cpf_reg" placeholder="CPF" id="cpf_reg" required>
                <input type="date" name="date_reg" placeholder="Data de Nascimento" id="date_reg" max="2005-06-23" required>
            </div>
        
            <input type="email" name="email_log" placeholder="E-mail" id="mail_log" onchange="onChangeEmail()"  required>
        
            <div class="senha">
                <input type="password" name="password_log" placeholder="Senha" id="pass_log" onchange="onChangePassword()" required>
            </div>
        
            <button type="submit" class="btn_submit" id="btn_registro" disabled="true">Registrar</button>
        </form>      
        <a href="../1.Login/login.php" id="redirect_registro" class="registro">Voltar</a>
          
    </div>
</body>
<script src="./validacoes.js"></script>
</html>