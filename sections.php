<?php

function showHome() {
    $html = '
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

    <h1>calculadora</h1>
    
    <form>
        <select name="operacion">
            <option value="suma">sumar</option>
            <option value="resta">restar</option>
            <option value="division">dividir</option>
            <option value="multiplicacion">multiplicar</option>
        </select>
        <input type="number" name="operando1">
        <input type="number" name="operando2">
        <input type="submit" value="calcular">
    </form>
</body>
</html>
    '; 
    echo $html;
}


?>