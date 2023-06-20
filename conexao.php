<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exemplo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Verifica se os campos foram enviados
if (isset($_POST['nome_reg']) && isset($_POST['cpf_reg']) && isset($_POST['date_reg']) && isset($_POST['email_log']) && isset($_POST['password_log']) && isset($_POST['confirm_password_log'])) {
    $nome = $_POST['nome_reg'];
    $cpf = $_POST['cpf_reg'];
    $dataNascimento = $_POST['date_reg'];
    $email = $_POST['email_log'];
    $senha = $_POST['password_log'];
    $confirmarSenha = $_POST['confirm_password_log'];

    // Verifica se as senhas coincidem
    if ($senha === $confirmarSenha) {
        // Insere os dados na tabela
        $sql = "INSERT INTO usuarios (nome, cpf, data_nascimento, email, senha) VALUES ('$nome', '$cpf', '$dataNascimento', '$email', '$senha')";

        if (mysqli_query($conn, $sql)) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . mysqli_error($conn);
        }
    } else {
        echo "As senhas não coincidem. Por favor, tente novamente.";
    }
}

// Fecha a conexão
mysqli_close($conn);
?>




