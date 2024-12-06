<?php
    require_once"/xampp/htdocs/GitHub\Projeto-Final-Desev.-WEB/atividadeFinalPHP/function.php";
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
inserirUsuarios($connect);
if (isset($_GET['id'])){ ?>
    <p>Tem certeza que deseja deletar o usuário  = <?php echo $_GET['nome']; ?> </p>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <input type="submit" name="deletar" value="Deletar"> 
    </form>
<?php } ?>
<?php
    if (isset($_POST['deletar'])) {
        if ($_SESSION['id'] != $_POST['id']) {
            deletar($connect, "users", $_POST['id']);
        } else {
            echo "Você não pode deletar o seu próprio usuário";
        }
    }
?>


<?php } ?>
<div class="container">
    <table>
		<thead>
			<tr>
                <th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Administrador</th>
				<th>Data de Cadastro</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
            <?php 
                foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?php echo $usuario['id'] ; ?></td>
                        <td><?php echo $usuario['nome'] ; ?></td>
                        <td><?php echo $usuario['email'] ; ?></td>
                        <td><?php echo $usuario['adm'] ; ?></td>
                        <td><?php echo $usuario['data_cadastro'] ; ?></td>
                        <td>
                            <a href="users.php?id=<?php echo $usuario['id']; ?>&nome=<?php echo $usuario['nome']; ?> ">Excluir</a>
                            | 
                            <a href="edit_user.php?id=<?php echo $usuario['id']; ?>&nome=<?php echo $usuario['nome']; ?> ">Editar</a>
                        </td>
                    </tr>


            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>

