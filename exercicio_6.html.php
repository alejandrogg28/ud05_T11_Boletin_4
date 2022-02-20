<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 Boletín 4</title>
</head>
<body>
<!--Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while.-->    

    <p>Números del 320 al 160 de 20 en 20:</p>

    <?php
    
        $a=320;

        do {
            echo "<p>$a</p>";
            $a -= 20;

        } while ($a >= 160);
    
    ?>

</body>
</html>