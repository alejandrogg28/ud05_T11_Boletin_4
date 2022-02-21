<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 Boletín 4</title>
</head>
<body>
<!--Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte-->    

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="combinacion">Combinación</label>
        <input type="number" name="combinacion"/><br/>
        <input type="submit" name="Enviar"/>
    </form>
    <?php
    
        $combinacionSecreta = "1111";

        if(isset($_POST['combinacion']) && filter_var($_POST['combinacion'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/[0-9]{4}/")))){
            if($_POST['combinacion'] == $combinacionSecreta){
                echo "<p>La caja fuerte se ha abierto satisfactoriamente</p>";
            }else {
                echo "<p>Lo siento. Esta NO es la combinación</p>";
            }

        }else {
            echo "<p>Introduce un número de cuatro dígitos</p>";
        }

    ?>
</body>
</html>