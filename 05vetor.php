<html>
<head>

    <meta charset="UTF-8">
    <title>Vetor 4</title>

</head>
<body>

<?php
     $vetor = array();

     for ($i = 0; $i <200; $i ++) {

        $vetor  [$i] = rand(1 , 1000);

       if (($vetor[$i] % 2 == 0) and ($vetor[$i] % 3 == 0)) {

        echo $vetor[$i] .  " <span style='color:pink;'> Número multiplo </span><br>";

       } else {

        echo $vetor[$i] . "<span>Número comum </span><br>";
       }

     }

?>

</body>
</html>