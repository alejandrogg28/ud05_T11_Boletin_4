<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 Boletín 4</title>
</head>
<body>
    <?php
    
        $num=$_POST['numero'];
        $fibCero=0;
        $fibUno=1;
        echo "$fibCero <br>";
        echo "$fibUno <br>";
    
        for ($i=2; $i < $num ; $i++) { 
            $fibActual = $fibCero + $fibUno;
            echo "$fibActual <br>";
            $fibCero=$fibUno;
            $fibUno=$fibActual;
        }



    ?>
    




</body>
</html>