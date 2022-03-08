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
        $numero=$_POST['numero'];
    
        if(!isset($numero)){
    ?>

    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
        <label for="numero">Introduce un número</label>
        <input type="number" name="numero"/>
        <br/>
        <input type="submit" name="Calcular"/>
    </form>        

    <?php
        }else{
            
            $fibCero = 0;
            $fibUno = 1;
            echo "<p>$fibCero</p>";
            echo "<p>$fibUno</p>";

            while ($numero > 2) {

                $fibActual = $fibCero;
                $fibCero = $fibUno;
                $fibUno = $fibActual + $fibUno;
                echo "<p>$fibUno</p>";
                $numero--;

            }

        }


    ?>
    




</body>
</html>