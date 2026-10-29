<?php
require_once 'Produtos.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $p1 = new Produto($_POST['nome'], $_POST['preco']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body style="background-color: #89CFF0;">
    <center>
    <h1 style="color: #003466;">Cadastre os produtos</h1>
    <form action="" method="post">

    <label for="nome" style="color: #003466;">Nome:</label>
    <input type="text" name="nome" id=""><br>

    <label for="preco" style="color: #003466;">Preço:</label>
    <input type="number" name="preco" id=""  step=0.01><br>

    <br>

    <input style="color: #003466;" type="submit" value="Cadastrar">
    </form>
    
    <?php
    if(isset($p1)){
        $p1->mostraProdutos();
    }
    ?>
    </center>
</body>
</html>