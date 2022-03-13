<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 Boletín 4</title>
</head>
<body>
<!--Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.-->    

    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">

        <label for="numero">Introduce un número</label>
        <input type="text" name="numero"/>
        <input type="submit" value ="Resolver"/>

    </form>

    <?php
    
        if(isset($_POST['numero'])){
            echo "<p> El número introducido tiene ".strlen($_POST['numero'])." cifras"."</p>";
        }else {
            echo "Tienes que introducir un número";
        }
    
    ?>


</body>
</html>