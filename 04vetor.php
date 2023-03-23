<html>
<head>

    <meta charset="UTF-8">
    <title>Vetor 4</title>

</head>
<body>

<?php
     $vetor = array();

     for ($i = 0; $i <50; $i ++) {

        $vetor  [$i] = rand(1 , 500);

        echo $vetor [$i] . "<br />" ;

     }

     $soma = 0;

     for ($i = 0; $i <50; $i ++) {

        $soma = $soma + $vetor[$i];
        
     }

     $media = $soma / 50;

     echo "<p>" . "a média é " . $media . "</p>";

?>

</body>
</html>
