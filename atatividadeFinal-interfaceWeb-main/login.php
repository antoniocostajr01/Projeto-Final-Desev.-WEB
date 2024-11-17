<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" type="imagex/png" href="images/icone.png">
    <title>Neo Street Wear</title>
</head>
<body>
    <?php require_once "layout/header.php"; ?>	

    <section class="conteudo">
        <div class="container-esquerda">
            <h1>Faça login e entre para<br>nosso time!</h1>
            <img src="images/logo.png" alt="logo NSW">
        </div> <!--END CONTAINER-ESQUERDA-->

        <div class="container-direita">
            <h2>LOGIN</h2>
            <form action="">
                <label for="email">E-mail</label>
                <input type="email" name="email" required>

                <label for="senha">Senha</label>
                <input type="password" name="senha" required>

                <button>Entrar</button>
            </form>

            <a href="#" class="botaogoogle"><img src="images/google.png" alt="icone google">Continuar com o Google</a>
            <div class="divesquecisenha"><a href="#" class="esquecisenha">Esqueci minha senha </a></div>

        </div> <!--End container da direta -->
    </section>

    <?php require_once "layout/footer.php"; ?>	
</body>
</html>