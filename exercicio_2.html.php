<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Boletín 3</title>
</head>
<body>
<!--Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle while-->    

    <p>Los múltiplos de 5 son: </p>

    <?php
    while ($a <= 100) {
        if($a % 5 == 0)
        echo "<p>$a</p>";
    }
    
    ?>

</body>
</html>