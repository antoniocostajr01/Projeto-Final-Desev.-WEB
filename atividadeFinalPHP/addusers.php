<?php
     require_once"/xampp/htdocs/atividadeFinalPHP/function.php";
     session_start(); 
     $seguranca = isset($_SESSION['ativa']) ? TRUE : header("location: login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/administrativo.css">

     <title>Painel administrador - Usuários - Adicionar Usuário</title>

     </head>

     <body>

     <?php if ($seguranca) { ?>

     <h1>Painel administrativo do site</h1>
     <h2>Adicionar novo usuário</h2>

     <?php include "layout/menu.php";?>
     
<?php 
     $tabela = "users";
     $order = "id";
     $usuarios = buscar($connect, $tabela, 1, $order);
     inserirUsuarios($connect);
?>

<form action="" method="post">
     <legend>Insira os dados</legend>
     <input type="text" name="nome" placeholder="Nome">
     <input type="email" name="email" placeholder="E-mail">
     <input type="password" name="senha" placeholder="Senha">
     <input type="password" name="repetesenha" placeholder="Confirme a senha">
     <input type="checkbox" id="adm1" name="adm" value="Permissões">
     <label for="adm">Permissões de Administrador</label><br>
     <input type="submit" name="cadastrar" value="Cadastrar">
</form>

<?php } ?>


</body>
</html>