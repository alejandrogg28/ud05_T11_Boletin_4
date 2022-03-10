<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16 Boletín 4</title>
</head>
<body>
<!--Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
primo es aquel que sólo es divisible entre él mismo y la unidad.-->    

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    <label for="numero">Introduce un número</label>
    <input type="number" name="numero"/>
    <br/>

    <input type="submit" value="Calcular"/>
    </form>

    <?php
    $numero = $_POST['numero'];
        if(isset($numero)){
            
                $esPrimo = true; 
                for ($dividido = 2; $dividido < $numero; $dividido++) { 
                    if ($n % $dividido == 0) {
                        $esPrimo = false;
                    }
                }
                if ($esPrimo) {
                    echo "<p>El numero es primo</p>";
                }
           
            
        }else {
            echo "<p>Tienes que introducir un número</p>";
        }

    
    ?>

</body>
</html>