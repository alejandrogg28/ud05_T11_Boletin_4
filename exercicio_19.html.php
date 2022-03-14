<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
        $altura = $_POST['altura'];
        $icono = $_POST['icono'];

        $errores = validarFormulario($altura,$icono);
        if(count($errores)>0){

            pintarFormulario();
            for ($i=0; $i < count($errores); $i++) { 
                echo "<p>*$errores[$i]</p>";
            }
        }else {
            pintarPiramide();
        }

        function validarFormulario($a,$i){
            $errores=array();
            
            if($a == ''){
                array_push($errores, "Tes que indicar a altura");
            }

            if(filter_var($a, FILTER_VALIDATE_INT) && $a < 0){
                array_push($errores, "A altura ten que ser un número positivo");
            }

            if($i == ''){
                array_push($errores, "Tes que escoller unha imaxe");
            }

            return $errores;
        }

        function pintarFormulario($altura,$icono){
            $linea="";
            for ($linea=0; $linea <$a; $linea++) { 
                $linea=$linea."<img src='img/$i'height='20px'>";
                echo $linea."</br>";
            }
        }

        function pintarPiramide($a,$i){
            $linea="";
            for ($indice=0; $i <$indice; $indice++) { 
                $indice=$indice."<img src='img/$i'height='24px'>";
                echo $indice."</br>";
            
            }
        }

            ?>

        

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="altura">Altura da pirámide</label>
        <input type="number" name="altura"/>
        <select>
            <option value="bolita.jfif">Bolita</option>
            <option value="instagram.jfif">Instagram</option>
            <option value="ladrillo.jfif">Ladrillo</option>
            <option value="messenger.jfif">messenger</option>
            <option value="twitter.jfif">Twitter</option>
        </select>
    </form>

    <?php

        
    ?>



</body>
</html>