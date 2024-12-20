<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calcados.css">
    <link rel="shortcut icon" type="imagex/png" href="images/icone.png">
    <title>Neo Street Wear</title>
</head>
<body>
    <?php require_once "layout/header.php"; ?>

    <section class="calcados">
        <h1>Calçados</h1>
        <img src="images/icone-tenis.png" alt="" class="camisa">
        <section class="main">
            <div class="container" id="calcados">
                <div class="card bloco1">
                    <img src="images/tenis-baw.png" alt="tênis Baw roxo">
                    <h6>Tênis Baw</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
                <div class="card bloco2">
                    <img src="images/tenis-approve.png" alt="tênis Approve bege">
                    <h6>Tênis Approve</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
                <div class="card bloco3">
                    <img src="/images/maisvendidos/tenis.png" alt="tênis Nike preto">
                    <h6>Tênis Nike</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
                <div class="card bloco4">
                    <img src="images/tenis-nike-verde.png" alt="tênis Nike verde">
                    <h6>Tênis Nike</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
                <div class="card bloco5">
                    <img src="images/tenis-baw-bege.png" alt="tênis Baw colorido">
                    <h6>Tênis Baw</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
            </div>
        </section>
    </section>
    
    <div class="botao-whats">
        <button>     
            <a href="#"><img src="images/redesSociais/whatsappbtn.png" alt="">Entre em contato diretamente via WhatsApp</a>
        </button>
    </div>

    <?php require_once "layout/footer.php"; ?>	
</body>
