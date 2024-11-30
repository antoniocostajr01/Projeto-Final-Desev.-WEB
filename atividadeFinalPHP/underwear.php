<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/underwear.css">
    <link rel="shortcut icon" type="imagex/png" href="images/icone.png">
    <title>Neo Street Wear</title>
</head>
<body>
    <?php require_once "layout/header.php"; ?>	

    <section class="underwear">
        <h1>Underwear</h1>
        <img src="images/icone-cueca.png" alt="" class="icone-underwear">
        <section class="main">
            <div class="container" id="underwear">
                <div class="card bloco1">
                    <img src="images/cueca-approve-preta.png" alt="cueca Approve preta">
                    <h6>Cueca Approve</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
                <div class="card bloco2">
                    <img src="images/calcinha-approve.png" alt="calcinha Approve branca">
                    <h6>Calcinha Approve</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
                <div class="card bloco3">
                    <img src="images/meia-nike.png" alt="meia Nike preta">
                    <h6>Meia Nike</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
                <div class="card bloco4">
                    <img src="images/cueca-nike-cinza.png" alt="cueca Nike cinza">
                    <h6>Cueca Nike</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
                <div class="card bloco5">
                    <img src="images/maisvendidos/meia.png" alt="meia Baw roxa">
                    <h6>Meia Baw</h6>
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
