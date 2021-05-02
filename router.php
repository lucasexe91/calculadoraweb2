<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once 'sections.php';
require_once 'operaciones.php';



// sumar/2/3 o  sumar/89/6  
// pi
// about
// about/juan

// lee la acción
if (!empty($_GET['operacion'])) {
    $action = $_GET['operacion'];
} else {
    $action = 'home'; // acción por defecto si no envían
}
// parsea la accion Ej: sumar/1/2 --> ['sumar', 1, 2]
$params = explode('/', $action);
$params[1]=$_GET['operando1'];
$params[2]=$_GET['operando2'];
// determina que camino seguir según la acción

switch ($params[0]) {
    case 'home': 
        showHome();
        break;
    case 'suma':
        echo getsuma($params[1], $params[2]);
        break;
    case 'resta':
        echo getresta($params[1], $params[2]);
        break;
    case 'division':
        echo getdivision($params[1], $params[2]);
        break;
    case 'multiplicacion':
        echo getmultiplicacion($params[1], $params[2]);
        break;
    default: 
        echo('404 Page not found'); 
        break;
}
?>