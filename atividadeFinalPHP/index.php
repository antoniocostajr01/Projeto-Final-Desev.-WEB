<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="imagex/png" href="images/icone.png">
    <title>Neo Street Wear</title>
</head>
<body>
    <?php require_once "layout/header.php"; ?>	

    <section class="banner">
        <h1>Neo Street Wear</h1>
    </section>

    <section  class="maisvendidos">
        <div>
            <h3>Seleção de produtos mais vendidos</h3>
        </div>
        <div class="container">
            <div class="seta-esquerda">
                <img src="images/setaesquerda.png" alt="seta">
            </div>
            <div class="card bloco1">
                <img src="images/maisvendidos/bone.jpg" alt="boné">
                <h6>Boné Baw</h6>
                <p>R$200,00</p>
                <a href="produto-detalhe.php"><button>Comprar</button></a>
            </div>
            <div class="card bloco2">
                <img src="images/maisvendidos/moletom.png" alt="moletom">
                <h6>Moletom Approve</h6>
                <p>R$200,00</p>
                <a href="produto-detalhe.php"><button>Comprar</button></a>
            </div>
            <div class="card bloco3">
                <img src="images/maisvendidos/tenis.png" alt="tênis">
                <h6>Tênis Nike</h6>
                <p>R$200,00</p>
                <a href="produto-detalhe.php"><button>Comprar</button></a>
            </div>
            <div class="card bloco4">
                <img src="images/maisvendidos/jaqueta.png" alt="jaqueta">
                <h6>Casaco Baw</h6>
                <p>R$200,00</p>
                <a href="produto-detalhe.php"><button>Comprar</button></a>
            </div>
            <div class="card bloco5">
                <img src="images/maisvendidos/meia.png" alt="meia">
                <h6>Meia Baw</h6>
                <p>R$200,00</p>
                <a href="produto-detalhe.php"><button>Comprar</button></a>
            </div>
            <div class="seta-direita">
                <img src="images/setadireita.png" alt="seta">
            </div>
        </div>
    </section>

    <section class="shop">
        <button><a href="shop.php"><h1>SHOP</h1></a></button>
    </section>

    <div class="vestuario">
        <button>
            <a href="vestuario.php">
                <h1>VESTUÁRIO</h1>
                <img src="images/icone-camisa.png" alt="ícone camiseta">
            </a>
        </button>
    </div>

    <div class="underwear">
        <button>
            <a href="underwear.php">
                <h1>UNDERWEAR</h1>
                <img src="images/icone-cueca.png" alt="ícone underwear">
            </a>
        </button>
    </div>

    <div class="calcados">
        <button>
            <a href="calcados.php">
                <h1>CALÇADOS</h1>
                <img src="images/icone-tenis.png" alt="ícone calçados">
            </a>
        </button>
    </div>

    <section class="nossas-marcas">
        <h1>NOSSAS MARCAS</h1>
        <div class="logos">
            <div class="baw">
                <a href=""><img src="images/logo-baw.png" alt="logo da Baw"></a>
            </div>
            <div class="approve">
                <a href=""><img src="images/logo-approve.png" alt="logo da Approve"></a>
            </div>
            <div class="nike">
                <a href=""><img src="images/logo-nike.png" alt="logo da Nike"></a>
            </div>
        </div>
    </section>

    <section class="noticias">
        <h1>NOTÍCIAS</h1>
        <div class="img-noticias"><img src="images/tenis_anos_200.png" alt="noticias dos tênis que marcaram os anos 2000"></div>
        <div class="img-noticias"><img src="images/marcas_nacionais_camisas.png" alt="nove marcas nacionais de camisas masculinas"></div>
        <div class="img-noticias"><img src="images/vida_minimalista.png" alt="como ter uma vida minimalista"></div>
    </section>

    <div class="botao-whats">
        <button>     
            <a href="#"><img src="images/redesSociais/whatsappbtn.png" alt="contato pelo WhatsApp">Entre em contato diretamente via WhatsApp</a>
        </button>
    </div>

    <?php require_once "layout/footer.php"; ?>	
</body>
</html>