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

    <title>Painel administrador - Editor de imagem</title>

</head>

<body>

<?php if ($seguranca) { ?>

    <h1>Editor de imagem principal</h1>
    <h3>Bem vindo, <?php echo $_SESSION['nome']; ?></h3>
    <h2>Gerenciador de imagem</h2>
    
    <?php include "layout/menu.php";?>

<?php 
$tabela = "card";
$order = "titulo";
$usuarios = buscar($connect, $tabela, 1, $order);
?>

<?php
    /*if (isset($_POST['deletar'])) {
        if ($_SESSION['id'] != $_POST['id']) {
            deletar($connect, "users", $_POST['id']);
        } else {
            echo "Você não pode deletar o seu próprio usuário";
        }
    }*/
?>

<?php } ?>
<div class="container">
    <table>
		<thead>
			<tr>
				<th>Imagem</th>
				<th>Titulo</th>
				<th>Data de Registro</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
            <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?php echo $usuario['img'] ; ?></td>
                        <td><?php echo $usuario['titulo'] ; ?></td>
                        <td><?php echo $usuario['data_registro'] ; ?></td>
                        <td>
                            <a href="">Editar</a>
                            | 
                            <a href="">Excluir</a>
                        </td>
                    </tr>


            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>

