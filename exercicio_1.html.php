<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Boletín 4</title>
</head>
<body>
<!--Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for.-->    


    <p>Los múltiplos de 5 son: </p>



    <?php
        for ($i=0; $i < 100; $i++) { 
            if($i % 5 == 0)
            echo "<p>$i</p>";
        }
    
    ?>

</body>
</html>

