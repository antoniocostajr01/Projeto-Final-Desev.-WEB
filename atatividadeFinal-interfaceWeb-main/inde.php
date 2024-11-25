<?php 
    session_start(); 
    require_once "function.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/administrativo.css">
    <title>Painel admin</title>
</head>
<body>
<?php 
    if(isset($_SESSION['ativa'])){ ?>


    <h1>Painel administrativo do site</h1>
    <h3>bem vindo, <?php echo $_SESSION['nome']; ?></h3>
    
    <table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>administrador</th>
				<th>Data</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
            <?php 
                $usuarios = usuarios($connect);
                foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['adm'] ? 'Sim' : 'Não' ?></td>
                        <td><?php echo $usuario['data_cadastro'] ?></td>
                        <td> 
                            <a href="index.php?id=<?php echo $usuario['id'] ?>">
                                Deletar
                            </a>							
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>

        
<?php }else {
    header("location: login.php");

}?>
</body>
</html>