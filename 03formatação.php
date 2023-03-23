<html>
<head>

    <meta charset="UTF-8">
    <title></title>

</head>
<body>

    <h1>Conversão</h1>

    <form action="03formatação.php"

    method="post">

    <p>Valor em real:

    <input type="text" name="real" />

    </p>
    <p>Valor do Dolar:

    <input type="text" name="dolar" />

    </p>
    <p>Valor do Euro:

    <input type="text" name="euro" />

    </p>

    <p><input value= "Calcular"

    type="submit" /></p>

    </form>

    <?php

    if ((isset($_REQUEST["real"])) and (isset ($_REQUEST["dolar"])) and (isset ($_REQUEST["euro"]))) {

    $real = $_REQUEST["real"];

    $dolar = $_REQUEST["dolar"];

    $euro= $_REQUEST["euro"];

    $precodolar = number_format(($real / $dolar), 2);

    $precoeuro = number_format(($real / $euro), 2);


    $precoformatada = str_replace("." , "," , $precodolar or $precoeuro);

    echo "<p>" . $real . " em euro fica " . $precoeuro . ", e em dolar fica " . $precodolar . "</p>";

    }
    ?>