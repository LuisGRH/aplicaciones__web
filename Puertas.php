<?php

if(isset($_GET["numero"])){

    $r = $_GET;

    $op = $r["numero"];

    switch($op){

        case '1':
        $resultado = "Felicidades, ganaste la piedra";
        
        break;

        case '2':
            $resultado = "Felicidades, ganaste la cabra";
            
            break;

        case'3':
            $resultado ="Felicidades, ganaste el carro";
            
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
    <title>Puertas</title>
</head>
<body>
    
<form method="get" action="puertas.php">


<label for="">Elige la puerta:</label>
<input type="text" name="numero">

<button type="submit" >Elegir</button>
</form>

<h3><?php echo $resultado; ?></h3>
</body>
</html>
