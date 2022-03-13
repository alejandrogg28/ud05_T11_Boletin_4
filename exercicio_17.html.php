<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 Boletín 4</title>
</head>
<body>
<!--Realiza un programa que sume los 100 números siguientes a un número entero y positivo
introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un número
positivo).-->    

    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">

        <label for="numero">Introduce un número</label>
        <input type="number" name="numero"/>
        <input type="submit" value="Calcular"/>

    </form>

    <?php
    
        if(isset($_POST['numero']) && filter_var($_POST['numero'],FILTER_VALIDATE_INT) && $_POST['numero'] >= 0){
            $n = $_POST['numero'];
            $cont=0;
            for ($i=$n + 1; $i < $n + 101; $i++) {
                $cont+=$i; 
                
                
            }
            echo "<p>La suma de los 100 números siguientes a ".$n." es:".$cont."</p>";
        }
        

    ?>


</body>
</html>