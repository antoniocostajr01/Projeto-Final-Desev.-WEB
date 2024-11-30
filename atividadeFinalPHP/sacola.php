<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sacola.css">
    <link rel="shortcut icon" type="imagex/png" href="images/icone.png">
    <title>Neo Street Wear</title>
</head>
<body>
    <?php require_once "layout/header.php"; ?>	

    <div class="tudo">
        <div class="esquerda">
            <section class="produto">
                <div class="img_bone">
                    <img src="images/maisvendidos/bone.jpg" alt="boné">
                </div>

                <h4 class="h4_bone">Boné BAW</h4>

                <h5 class="h5_bone">Tam: único</h5>
                
                <h5 class="preco_bone">R$200,00</h5>

                <div class="lixo">
                    <img src="images/trash.png" alt="lixeira">
                </div>
            </section>

            <section class="produto">
                <div class="img_meia">
                    <img src="images/maisvendidos/meia.png" alt="meia">
                </div>

                <h4 class="h4_meia">Meia BAW</h4>

                <h5 class="h5_meia">Tam: 41/42</h5>
                
                <h5 class="preco_meia">R$200,00</h5>

                <div class="lixo">
                    <img src="images/trash.png" alt="lixeira">
                </div>
            </section>

            <section class="produto">
                <div class="img_tenis">
                    <img src="images/maisvendidos/tenis.png" alt="tênis">
                </div>

                <h4 class="h4_tenis">Tênis Nike</h4>

                <h5 class="h5_tenis">Tam: 41</h5>

                <h5 class="preco_tenis">R$200,00</h5>

                <div class="lixo">
                    <img src="images/trash.png" alt="lixeira">
                </div>
            </section>
            
        </div>

        <div class="direita">
            <section class="info_subtotal">
                <div class="subtotal">
                    <h4 class="h4">Subtotal</h4>
                    <h5 class="h5">R$600,00</h5>
                </div>
            </section>

            <section class="info">
                <div class="frete">
                    <h4 class="h4">Frete</h4>
                    <h5 class="h5">R$10,00</h5>
                </div>
            </section>

            <section class="info">
                <div class="total">
                    <h4 class="h4">Total</h4>
                    <h5 class="h5">R$610,00</h5>
                </div>
            </section>

            <section class="info_finalizar">
                <div class="finalizar">
                    <h4 class="h4">Finalizar compra</h4>
                </div>
            </section>

            <section class="info_continuar">
                <div class="continuar">
                    <h4 class="h4">Continuar compra</h4>
                </div>
            </section>

        </div>
    </div>

    <?php require_once "layout/footer.php"; ?>	
</body>
</html>