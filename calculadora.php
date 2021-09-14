<?php

if(isset($_GET["numero"])){

    $r = $_GET;

    $op = $r["operacion"];
    $numero_1= $_GET["num1"];
    $numero_2= $_GET["num2"];


    switch($op){

        case 'suma':
        $resultado = $numero_1 + $numero_2;
        
        break;

        case 'resta':
            $resultado = $resultado = $numero_1 - $numero_2;

            
            break;

        case'Multiplicacion':
            $resultado = $resultado = $numero_1 * $numero_2;

            
            break;

            case'division':
                $resultado = $resultado = $numero_1 / $numero_2;

                
                break;




    }

}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
<form method="get" action="calculadora.php">


<label for="">Numero 1:</label>
<input type="text" name="numero">
<select name="operacion">
    <option>Suma</option>
    <option>Resta</option>
    <option>Multiplicacion</option>
    <option>Division</option>

<label for="">Numero 2:</label>
<input type="text" name="numero">

<button type="submit" >Calcular</button>
</form>

<h3><?php echo $resultado; ?></h3>
</body>
</html>
