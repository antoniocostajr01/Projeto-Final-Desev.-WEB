<?php
    include '\xampp\htdocs\GitHub\Projeto-Final-Desev.-WEB\atividadeFinalPHP\function.php';
    session_start(); 
    $seguranca = isset($_SESSION['ativa']) ? TRUE : header("location: login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/administrativo.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>

    <title>Painel administrador</title>

</head>

<body>

<?php if ($seguranca) { ?>

    <h1>Painel administrativo do site</h1>
    <h3>Bem vindo, <?php echo $_SESSION['nome']; ?></h3>
    
<?php include "layout/menu.php";?>

<?php } ?>
    <table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Administrador</th>
				<th>Data</th>
			</tr>
		</thead>
		<tbody>
            <?php 

                $usuarios = usuarios($connect);
                foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id'] ?></td>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['adm'] ? 'Sim' : 'Não' ?></td>
                        <td><?php echo $usuario['data_cadastro'] ?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

