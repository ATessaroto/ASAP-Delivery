
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/fe76b256b3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="login_style.php">
        
        <title>Login</title>
    </head>
    <body>
        <div class="log_erro">
            <?php
                if(isset($_GET['error'])){
                if($_GET['error'] == 'userLoginFailed')
                {
                    
                    echo '<p class="log_erro" id="erro">Usuário ou senha inválidos!</p>';
                    
                }}
            ?> 
        </div>
        <form action="../0.Global/loginUser.php" method="POST" class="display" id="container_log">
            <p id="bem_vindo">Faça seu Login e peça já!</p>

            <div class="user">
                <i class="fa-solid fa-user" style="color: #6b6b6b;"></i>
                <input type="email" name="email_log"  placeholder="Usuário" id="mail_log" required>
            </div>
            <br>
            <div class="password">
                <i class="fa-solid fa-lock" style="color: #6b6b6b;"></i>
                <input type="password" name="password_log" placeholder="Senha" id="pass_log" required>
            </div>

            <br>
            <div class="lembrar_email">
                <input type="checkbox" id="chk_mail" name="email" checked>
                <label for="chk_mail" id="lbl_mail">Lembrar e-mail</label>
            </div>

            <button type="submit" class="btn_submit" id="btn_login" >Entrar</button>

            <div class="registro">
                <p id="txt_conta" class="registro">Não possui uma Conta?</p> 
                <a href="../2.Cadastro/cadastro.php" id="redirect_registro" class="registro"> Inscreva-se</a>
            </div>
            
        </form>
    </body>
</html>