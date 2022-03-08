<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14 Boletín 4</title>
</head>
<body>
<!--Escribe un programa que pida una base y un exponente (entero positivo)
y que calcule la potencia.-->    

    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">

        <label for="base">Introduce una base</label>
        <input type="number" name="base"/>

        <label for="exponente">Introduce una exponente</label>
        <input type="number" name="exponente"/>
        <br/>
        
        <input type="submit" name="Calcular"/>
    </form>

    <?php
    
        if(isset($_POST['base']) && isset($_POST['exponente'])){

            $base = $_POST['base'];
            $exponente = $_POST['exponente'];
            $potencia = 1;

            if ($exponente == 0) {
                $potencia = 1;
            }

            if ($exponente > 0) {
                for ($i = 0; $i < $exponente; $i++) {
                    $potencia *= $base;
                }
            }

            echo "$base<sup>$exponente</sup> = $potencia";

          }else {
              echo "<p>Tienes que introducir un número</p>";
          }

        
    
    ?>


</body>
</html>