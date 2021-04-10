
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web II Calculadora</title>
    </head>
    <body>
        <h1>Trabajo practico web 2 TUDAI UNICEN</h1>
        <nav>
            <ul>
                <li><a href="index.html">calculadora</a></li>
                <li><a href="pi.php">numero pi</a></li>
                <li><a href="about.php">about</a></li>
            </ul>
        </nav>
<?php  
    require_once 'operaciones.php';
    
    if (!is_numeric($_REQUEST["operando1"]) || (!is_numeric($_REQUEST["operando2"])) || empty($_REQUEST['operacion'])){

        echo 'datos faltantes o no validos';
        die();

    }
    
    $op1 = $_REQUEST("operando1");
    $op2 = $_REQUEST("operando2");
    $operacion = $_REQUEST("operacion");

    switch ($operacion){
        case 'suma': 
            echo 'El resultado de la operacion suma es: ' . suma($op1,$op2);
            break;
        case 'resta':
            echo 'El resultado de la operacion resta es: ' . resta($op1,$op2);
            break;
        case 'division':
            echo 'El resultado de la operacion division es: ' . division($op1,$op2);
            break;
        case 'multiplicacion':
            echo 'El resultado de la operacion multiplicacion es: ' . multiplicacion($op1,$op2);
            break;
        default:
            echo 'Error! operacion no valida';
    }

?>
</body>
</html>