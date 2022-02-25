<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ehercicio 11 Boletín 4</title>
</head>
<body>
<!--Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números
enteros a partir de uno que se introduce por teclado.-->  

    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
        <label for="numero">Introduce un número</label>
        <input type="number" name="numero"/>
        <br/>
        <input type="submit" name="Calcular"/>
    </form>

    <?php
    
        if(!isset($_POST['numero'])){
            echo "<p>Tienes que introducir un número</p>";
        }else if (isset($_POST['numero']) && filter_var($_POST['numero'],FILTER_VALIDATE_INT)) {
            echo "<table border = 1>";

            for ($i=0; $i <= 5; $i++) { 
                echo "<tr>"."<th>".$_POST['numero']."Cuadrado".pow($_POST['numero'],2)."</th>"."</tr>";
                echo "<tr>"."<th>".$_POST['numero']."Cubo".pow($_POST['numero'],3)."</th>"."</tr>";
                $_POST['numero']++;
            }
        }else {
            echo "<p>Tienes que introducir un número.</p>";
        }
    
    
    ?>

</body>
</html>