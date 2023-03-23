<html>
<head>

    <meta charset="UTF-8">
    <title>Vetor 3</title>

</head>
<body>

<?php
     $vetor = array();

     for ($i = 0; $i <200 ; $i ++) {

     $vetor  [$i] = rand(1 , 1000);

     echo $vetor [$i] . "<br />" ;

    
     }

     echo "<p>" . "o maior valor do vetor seria " . max ($vetor) . "</p>";
?>

</body>
</html>
