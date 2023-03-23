<html>
<head>

    <meta charset="UTF-8">
    <title></title>

</head>
<body>

    <h1>Compras</h1>

    <form action="02formatação.php"

    method="post">

    <p>Digite o nome:

    <input type="text" name="nome" />

    </p>

    <p>Digite a quantidade:

    <input type="number" name="quan" />

    </p>

    <p>Digite preço unitário:

    <input type="number" name="preco" />

    </p>

    <p>Digite o desconto:

    <input type="number" name="desc" />

    </p>

    <p>Digite o frete:

    <input type="number" name="frete" />

    </p>

    
    <p><input value= "Calcular"

    type="submit" /></p>

    </form>

    <?php

    if ((isset($_REQUEST["nome"])) and (isset ($_REQUEST["quan"])) and (isset ($_REQUEST["preco"])) and (isset ($_REQUEST["desc"]) and (isset ($_REQUEST["frete"])))) {

    $nome = $_REQUEST["nome"];

    $quan = $_REQUEST["quan"];

    $preco = $_REQUEST["preco"];

    $desc = $_REQUEST["desc"];

    $frete = $_REQUEST["frete"];

    $precototal = ((($quan * $preco) - $desc) + $frete);

    

    echo "<p>" . "o valor total da compra da " . $nome . " será de " . $precototal . "</p>";


}

?>
</body>
</html>
