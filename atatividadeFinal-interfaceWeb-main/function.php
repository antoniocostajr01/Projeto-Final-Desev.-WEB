<?php

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "nsw";
//conexão banco de dados
$connect = mysqli_connect( $host, $db_user, $db_pass, $db_name);

function login( $connect ){
    if (isset($_POST['acessar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])){

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        $senha = sha1($_POST['senha']);
        $query = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha' ";
        $executar = mysqli_query($connect, $query);
        $return = mysqli_fetch_assoc($executar);
        
        if (!empty($return['email'])){
            echo "Bem vindo " . $return['nome'];

            session_start();
            $_SESSION['nome'] = $return ['nome'];
            $_SESSION['id'] = $return ['id'];
            $_SESSION['ativa'] = TRUE;

            header("location:inde.php");
        }else{
            echo "Usuário não encontrado";
        }
    }
}


