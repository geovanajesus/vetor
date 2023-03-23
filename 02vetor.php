<html>
<head>

    <meta charset="UTF-8">
    <title>Vetor 2</title>

</head>
<body>

    <?php
    $velha = array ();
    $velha[0][0]="X";
    $velha[0][1]="O";
    $velha[0][2]="X";
    $velha[1][0]="O";
    $velha[1][1]="O";
    $velha[1][2]="X";
    $velha[2][0]="X";
    $velha[2][1]="X";
    $velha[2][2]="X";


    for ($i = 0; $i < 3; $i ++ ) {

         for  ($j = 0; $j < 3; $j ++ ){
           
            echo $velha [$i]  [$j] ;

         }

            echo  "<br />";
      
    }

?>

</body>
</html>
