
<html>
<head>

    <meta charset="UTF-8">
    <title></title>

</head>
<body>

    <h1>Cálculo da Média</h1>

    <form action="01formatação.php"

    method="post">

    <p>Digite o nome do aluno:

    <input type="text" name="nome" />

</p>

    <p>Digite a primeira nota:

    <input type="text" name="nota1" />

</p>

    <p>Digite a segunda nota:

    <input type="text" name="nota2" />

</p>

    <p><input value= "Calcular"

    type="submit" /></p>

</form>

<?php

if (isset($_REQUEST["nome"]) and isset($_REQUEST["nota1"]) and isset($_REQUEST["nota2"])){

    $nome = $_REQUEST["nome"];

    $nota1 = $_REQUEST["nota1"];

    $nota2 = $_REQUEST["nota2"];



    $media = number_format((($nota1 + $nota2) / 2 ), 1);

    $mediaformatada = str_replace("." , "," , $media);

    echo $nome. "a sua média final é " . $mediaformatada;

}

    ?>

    <p> <input type="button" value= "voltar"

    onclick = "javascript:history.back();" >



</p>
    
</body>
</html>