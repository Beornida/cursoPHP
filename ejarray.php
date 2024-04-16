<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>

<?php
$listanumeros=array(1,3,7,2,6,8,12,13,15,14,18);
// $listapares;
// $listaimpares=[];

for($i =0; $i <11; $i++){
    echo $listanumeros[$i].", ";
}

for($i = 0; $i <= 11; $i++){
    // echo $listanumeros[$i]."</br>";
    
    // $listanumeros.foreach($listanumeros){

        $numeros[$i]=$numeros[$i]/3;

        if ($numeros[$i] %2==0){
            echo $numeros[$i].", ";
        }
    }
        
    //     if ($listanumeros[$i] % 2 != 0){
    //         echo $listanumeros[$i]."<br/>";
    //     }
    // }

// listanumeros(listaimpares);
// }
  
?>


    
</body>
</html>