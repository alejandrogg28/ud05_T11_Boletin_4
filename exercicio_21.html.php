<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21 Boletín 4</title>
</head>
<body>
<!--Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares . El
número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
en el cómputo.-->    

<form action= "<?php echo $_SERVER ['PHP_SELF'];?>" method="POST">

    <label for="numero">Introduce un número</label>
    <input type ="number" name="numero"/>
    <br/>
    <input type="submit" value="Calcular"/>

</form>

<?php

    if(!isset($_SESSION['numeros'])){
        $_SESSION['numeros'] = array();
        $_SESSION['impares'] = array();
        $_SESSION['pares'] = array();    
    }
    

    if(isset($_POST['numero']) && filter_var($_POST['numero'],FILTER_VALIDATE_INT) && $_POST['numero'] >= 0){
        /*Trabajamos aquí*/

        $n = $_POST['numero'];
        
        if ($n % 2 != 0) {
            array_push($_SESSION['impares'],$n);
        }elseif ($n % 2 == 0) {
            array_push($_SESSION['pares'],$n);
        }

        array_push($_SESSION['numeros'],$n);
        

    }else if(isset($_POST['numero']) && filter_var($_POST['numero'],FILTER_VALIDATE_INT) && $_POST['numero'] < 0) {
        /*Calculamos la media*/

            $suma = 0;
            for ($i=0; $i < count($_SESSION['impares']); $i++) { 
                $suma += $_SESSION['impares'][$i];
            }
    
            $media = $suma / count($_SESSION['impares']);

        echo "<p>Introduxeches ".count($_SESSION['numeros'])." números"."</p>";
        echo "<p> A media dos números impares é: ".$media."</p>";

        /*Mostrar el par más grande*/

        echo "<p>".max($_SESSION['pares'])." foi o número par introducido mais grande"."</p>";
            
        //echo "<p>".count($_SESSION['impares'])."</p>";
       
        /*Por último destruimos la sesión*/
        $_SESSION = array();

        // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
        // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
            );
        }

    // Finalmente, destruir la sesión.
    session_destroy();

    }else {
        echo "<p>Introduce un número</p>";
    }

?>


</body>
</html>