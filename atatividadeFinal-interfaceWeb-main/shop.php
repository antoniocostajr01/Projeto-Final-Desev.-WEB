<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="shortcut icon" type="imagex/png" href="images/icone.png">
    <title>Neo Street Wear</title>
</head>
<body>
    <?php require_once "layout/header.php"; ?>	

    <section class="shop">
        <h1>SHOP</h1>
        <section class="main">
            <div class="btn">
                <a href="vestuario.php"><button>VESTUÁRIO</button></a>
                <a href="calcados.php"><button>CALÇADOS</button></a>
                <a href="underwear.php"><button>UNDERWEAR</button></a>
            </div>
            <div class="img">
                <img src="images/icone-camisa.png" alt="icone vestuario">
                <img src="images/icone-tenis.png" alt="ícone calcados">
                <img src="images/icone-cueca.png" alt="ícone underwear">
            </div>
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
                    <img src="images/camiseta-baw.png" alt="camiseta Baw">
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
                    <img src="images/casaco-nike.png" alt="casaco Nike">
                    <h6>Casaco Nike</h6>
                    <p>R$200,00</p>
                    <a href="produto-detalhe.php"><button>Comprar</button></a>
                </div>
            </div>

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
                    <img src="images/maisvendidos/tenis.png" alt="tênis Nike preto">
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
</html>