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

    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">

    <label for="base">Introduce un número</label>
    <input type="number" name="numero"/>
    <br/>

    <input type="submit" name="Calcular"/>
    </form>

    <?php
        if(isset($_POST['numero'])){
            $esPrimo=false;
            for ($i=0; $i < 0; $i++) { 
                if($_POST['numero'] % $_POST['numero'] == 0){
                    echo "<p>No es primo</p>";
                }
            }
        }else {
            echo "<p>Tienes que introducir un número</p>";
        }

    
    ?>

</body>
</html>