<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="shortcut icon" type="imagex/png" href="images/icone.png">
    <title>Neo Street Wear</title>
</head>
<body>
    <?php require_once "layout/header.php"; ?>	

    <div class="contato">
        <div class="div1">
            <img id="logo-contato" src="images/logo.png" alt="logo da marca">
        </div>
        <div class="div2">
            <h1>Entre em contato conosco</h1>
            <form action="">
                <label for="nome">Nome completo</label>
                <input type="text" name="nome" required>

                <label for="data">Data de nascimento</label>
                <input type="date" name="idade" required>

                <label for="number">Número de telefone</label>
                <input type="number" name="telefone" required>

                <label for="email">Seu E-mail</label>
                <input type="email" name="email" required>

                <label for="mensagem">Escreva sua mensagem:</label>
                <textarea name="mensagem" id="mensagem" required></textarea>

                <button>Enviar</button>
            </form>
            
        </div>
        <div class="div3">
            <p>Contato</p>
            <span><p>newstreetwear@gmail.com</p></span>

            <p>Sede em</p>
            <span><p>Porto Alegre, Rio Grande do Sul</p></span>

            <a href=""><img src="images/redesSociais/instagram.png" alt="logo instagram"></a>
            <a href=""><img src="images/redesSociais/tt.png" alt="logo X"></a>
            <a href=""><img src="images/redesSociais/face.png" alt="logo Facebook"></a>
            <a href=""><img src="images/redesSociais/whatsapp.png" alt="logo WhatsApp"></a>
        </div>
    </div>
    
    <?php require_once "layout/footer.php"; ?>	
</body>
</html>