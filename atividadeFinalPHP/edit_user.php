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

    <title>Painel administrador - Usuários</title>

</head>

<body>

<?php if ($seguranca) { ?>

    <h1>Painel administrativo do site</h1>
    <h3>Bem vindo, <?php echo $_SESSION['nome']; ?></h3>
    <h2>Gerenciador de Usuários</h2>

    <?php include "layout/menu.php";?>

<?php 
    $tabela = "users";
    $order = "id";
    $usuarios = buscar($connect, $tabela, 1, $order);
    updateUser($connect);
?>

<?php if (isset($_GET['id'])) { 
    $id = $_GET['id'];
    $usuario = buscaUnica($connect, "users", $id);
?>
    <h2>Editando o usuário <?php echo $_GET['nome'];?></h2>

<?php } ?>

<form action="" method="post">
    <fieldset>
        <legend>Editar Usuário</legend>
        <input value="<?php echo $usuario['id'] ?>" type="hidden" name="id" required>
        <input value="<?php echo $usuario['nome'] ?>" type="text" name="nome" placeholder="Nome" required>
        <input  value="<?php echo $usuario['email'] ?>" type="email" name="email" placeholder="E-mail" required>
        <input  type="password" name="senha" placeholder="Senha">
        <input type="password" name="repetesenha" placeholder="Confirme a senha">
        <input  value="<?php echo $usuario['data_cadastro'] ?>"  type="date" name="data_cadastro" required>
        <input type="submit" name="atualizar" value="Atualizar">
    </fieldset>
</form>

<?php } ?>


</body>
</html>

