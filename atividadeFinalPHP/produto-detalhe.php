<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/produto-detalhe.css">
    <link rel="shortcut icon" type="imagex/png" href="images/icone.png">
    <title>Neo Street Wear</title>
</head>
<body>
    <?php require_once "layout/header.php"; ?>	

    <div class="container">
        <section class="produto">
            <div class="imagem-produto"><img src="images/maisvendidos/jaqueta.png" alt="produto escolhido"></div>
        </section>
        <section class="sobre-produto">
            <div class="informacoes">
                <h2>Jaqueta Baw</h2>
                <p>Jaqueta Baw Pullover é uma peça que mistura o conforto com o estilo, ideais para os looks mais despojados.</p>
            </div>
            <div class="tamanho">
                <h3>Selecione o tamanho:</h2>
                <ul>
                    <li><a href="#">P</a></li>
                    <li><a href="#">M</a></li>
                    <li><a href="#">G</a></li>
                    <li><a href="#">GG</a></li>
                </ul>
            </div>
            <div class="add-carrinho">
                <a href="sacola.php">Adicionar ao carrinho</a>
            </div>
        </section>
    </div>
    <div class="botao-whats">
        <button>     
            <a href="#"><img src="images/redesSociais/whatsappbtn.png" alt="contato pelo WhatsApp">Entre em contato diretamente via WhatsApp</a>
        </button>
    </div>
</body>
</html>