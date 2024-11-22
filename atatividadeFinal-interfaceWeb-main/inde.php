<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel admin</title>
</head>
<body>
<?php 
    if(isset($_SESSION['ativa'])){ ?>


    <h1>Painel administrativo do site</h1>
    <h3>bem vindo, <?php echo $_SESSION['nome']; ?></h3>

        
<?php }else {
    header("location: login.php");

}?>
</body>
</html>