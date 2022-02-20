<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Boletín 4</title>
</head>
<body>
<!--Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for.-->    


    <p>Números del 320 al 160 de 20 en 20:</p>

    <?php
    
        for ($i=320; $i >= 160 ; $i -= 20) { 
            echo "<p>$i</p>";
        }
    
    ?>

</body>
</html>