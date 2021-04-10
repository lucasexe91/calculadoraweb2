
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web II Calculadora</title>
    </head>
    <body>
    
        <nav>
            <ul>
                <li><a href="index.html">calculadora</a></li>
                <li><a href="index.html">numero pi</a></li>
                <li><a href="index.html">about</a></li>
            </ul>
        </nav>
<?php  
    
    if (is_numeric($_REQUEST("operando1")) || (is_numeric($_REQUEST("operando2"))) || empty($_REQUEST('operacion'))){

        echo 'datos faltantes o no validos';
        die();

    }

    $op1 = $_REQUEST("operando1");
    $op2 = $_REQUEST("operando2");
    $operacion = $_REQUEST("operacion");

    switch ($operacion){
        case 'suma': 
            $resultado = $op1 + $op2
            echo 'El resultado de la operacion suma es: ' .$resultado;
            break;
        case 'resta':
            $resultado = $op1 - $op2
            echo 'El resultado de la operacion resta es: ' .$resultado;
            break;
        case 'division':
            $resultado = $op1 / $op2
            echo 'El resultado de la operacion division es: ' .$resultado;
            break;
        case 'multiplicacion':
            $resultado = $op1 * $op2
            echo 'El resultado de la operacion multiplicacion es: ' .$resultado;
            break;
        default:
            echo 'Error! operacion no valida';
    }


?>
</body>
</html>