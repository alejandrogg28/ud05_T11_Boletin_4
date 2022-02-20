<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Boletín 4</title>
</head>
<body>
<!--Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle do-while.-->    

    <p>Los múltiplos de 5 de 0 a 100 son:</p>
    
    <?php
        $a=0;

        do {
            echo "<p>$a</p>";
             $a += 5;
         } while ($a <= 100);
            
        
        
    
    ?>


</body>
</html>