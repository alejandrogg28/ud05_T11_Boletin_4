<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18 Boletín 4</title>
</head>
<body>
<!--Escribe un programa que obtenga los números enteros comprendidos entre dos números introducidos
por teclado y validados como distintos, el programa debe empezar por el menor de los enteros
introducidos e ir incrementando de 7 en 7.-->    

    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">

        <label for="n1">Introduce el primer número:</label>
        <input type="number" name="n1"/>
        </p>
        <label for="n2">Introduce el segundo número:</label>
        <input type="number" name="n2"/>
        </p>
        <input type="submit" value="Resolver"/>

    </form>

    <?php

        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        
        if(!isset($n1) && !isset($n2)){
            echo "<p>Tienes que introducir un número</p>";
        }

        if(isset($n1) && filter_var($n1,FILTER_VALIDATE_INT) && isset($n2) && filter_var($n2,FILTER_VALIDATE_INT) && $n1 > $n2 ){
            $cajonDeSastre=$n1;
            $n1=$n2;
            $n2=$cajonDeSastre;
        }
        for ($i=$n1; $i <= $n2; $i+=7) { 
            echo "<p>".$i."</p>";
        }
    
    ?>


</body>
</html>