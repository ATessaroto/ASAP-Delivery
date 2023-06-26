<?php
    session_start();
    include("../0.Global/connection.php");
    include("../0.Global/functions.php");
    


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['nome_reg'];
        $cpf = $_POST['cpf_reg'];
        $data_nascimento = $_POST['date_reg'];
        $email = $_POST['email_log'];
        $password = $_POST['password_log'];

        //save to database
        $query = "insert into usuario (nome_completo,CPF,data_nascimento,email,senha) values ('$user_name','$cpf','$data_nascimento','$email','$password')";
        
        $result = mysqli_query($con, $query);
        if($result) 
        {
            header('Location: /conexao_sql/2.Cadastro/cadastro.php?success=userCreated');;
        }  
        else 
        {
            header('Location: /conexao_sql/2.Cadastro/cadastro.php?error=userCrateFailed');
            die;
        }

    };

?>