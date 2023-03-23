<html>
<head>

    <meta charset="UTF-8">
    <title>PI</title>

</head>
<body>

<form>
<p>Digite o raio

    <input type="number" name="raio" />

    </p>

    
    <p><input value= "Calcular"

    type="submit" /></p>

    </form>

<?php

if ((isset($_REQUEST["raio"]))){

    $raio = $_REQUEST["raio"];
    

    $piformatada = number_format (2 * pi() , 3);

    $calculototal = number_format ($piformatada * $raio , 3);

    echo "<p>" . "O periodo é " . $calculototal . "</p>";
}
?>

</body>
</html>