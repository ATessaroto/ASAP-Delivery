<?php
    session_start();
    include("../0.Global/connection.php");
    include("../0.Global/functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        
        $email = $_POST['email_log'];
        $password = $_POST['password_log'];

        if(!empty($email) && !empty($password))
		{

			$query = "select * from usuario where UPPER(email) = UPPER('$email') LIMIT 1";
        
            $result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['senha'] === $password)
					{
						$_SESSION['user_id'] = $user_data['id_user'];
						header("Location: /conexao_sql/3.Home/inicio.php");
						die;
					}
				}
			}
			
			header('Location: /conexao_sql/1.Login/login.php?error=userLoginFailed');
        }
        else
        {
            header('Location: /conexao_sql/1.Login/login.php?error=userLoginFailed');
        }

    };

?>