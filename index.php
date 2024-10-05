<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CAVALCANNT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h1>Bebidas</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        

        Nome: <input type="text" name="nome"><br>
        Tipo:
        <select name="tipo">
            <option value="Vinho">Vinho</option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Suco">Suco</option>
        </select><br>

        Preço: <input type="text" name="preco"><br>

        Data (somente para vinho):
        <select name="safra">
            <?php
            $anoAtual = date("Y");
            for ($ano = $anoAtual; $ano >= 1850; $ano--) {
                echo "<option value='$ano'>$ano</option>";
            }
            ?>
        </select><br>
        
        <input type="submit" value="Cadastrar Bebida">
    </form>
 

    <?php
    require_once('vinho.php');
    require_once('refrigerante.php');
    require_once('suco.php');
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $preco = $_POST['preco'];
 
        if ($tipo == "Vinho") {
            $safra = $_POST['safra'];
            $bebida = new Vinho($nome, $tipo, $preco, $safra);
        } elseif ($tipo == "Refrigerante") {
            $bebida = new Refrigerante($nome, $tipo, $preco);
        } elseif ($tipo == "Suco") {
            $bebida = new Suco($nome, $tipo, $preco);
        }
 
        echo "<p>".$bebida->mostrarBebida()."</p>";
 
        if ($bebida->verificarPreco($preco)) {
            echo '<p>Produto a preço de banana "Oferta"!</p>';
        } else {
            echo '<p>Sem desconto senta e chora "Valor Normal"!</p>';
        }
    }
    ?>
</body>
</html>