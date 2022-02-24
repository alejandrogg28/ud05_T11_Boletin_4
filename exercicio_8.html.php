<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 Boletín 4</title>
</head>
<body>
<!--Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar
en una tabla (<table> en HTML).-->    

    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post"> 

        <label for="numero">Introduce un número</label>
        <input type="number" name="numero"/>
        <br/>
        <input type="submit" name="Enviar"/>

    </form>
    <br/>
    <?php
    
        if (!isset($_POST['numero'])) {
            echo "<p>Tienes que introducir un número</p>";
        }else if(isset($_POST['numero']) && filter_var($_POST['numero'],FILTER_VALIDATE_INT)){
            
            echo "<table border = '1'>";
           

            for ($i=1; $i <= 10; $i++) { 
                echo "<tr>"."<th>".$_POST['numero']." * ". $i."</th>"."<th>".$_POST['numero'] * $i."</th>"."</tr>";
            }

            echo "</tr>";
            echo "</table>";

        }else {
            echo "<p>Tienes que introducir un número</p>";
        }
            
        
            
            
            
        

        
    ?>


</body>
</html>