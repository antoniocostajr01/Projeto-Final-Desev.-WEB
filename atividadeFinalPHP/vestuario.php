<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vestuario.css">
    <link rel="shortcut icon" type="imagex/png" href="images/icone.png">
    <title>Neo Street Wear</title>
</head>
<body>
    <?php require_once "layout/header.php"; ?>	

    <section class="vestuario">
        <h1>Vestuário</h1>
        <img src="images/icone-camisa.png" alt="" class="icone camisa">
        <section class="main">
            <div class="container" id="vestuario">
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
                    <img src="images/camiseta-baw.png" alt="tênis Baw">
                    <h6>Camisa Baw</h6>
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
                    <img src="images/casaco-nike.png" alt="meia">
                    <h6>Casaco Nike</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
            </div>
        </section>
    </section>
    
    <div class="botao-whats">
        <button>     
            <a href="#"><img src="images/redesSociais/whatsappbtn.png" alt="contato pelo WhatsApp">Entre em contato diretamente via WhatsApp</a>
        </button>
    </div>

    <?php require_once "layout/footer.php"; ?>	
</body>
