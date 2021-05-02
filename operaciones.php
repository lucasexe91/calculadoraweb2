<?php

    function suma($op1,$op2){
       return $op1 + $op2;
    }
    function resta($op1,$op2){
        return $op1 - $op2;
    }
    function division($op1,$op2){
        if ($op2 == 0){
            return 'err';
        }
        return $op1 / $op2;
    }
    function multiplicacion($op1,$op2){
        return $op1 * $op2;
    }
    function getsuma($op1,$op2){
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>About</title>
        </head>
        <body>';

        if (isset($op1)&& isset($op2)){
            $result = suma($op1, $op2);
            $html.="<h2> Cuenta = ".$op1."+".$op2."</h2>";
            $html.= "<h2> Resultado: ".$result."</h2>";
        }else{
            $html.="<h2> Valores vacios!!! D: </h2>";
        }
        $html.='</body></html>';
        return $html;
    }
    function getresta($op1,$op2){
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>About</title>
        </head>
        <body>';

        if (isset($op1)&& isset($op2)){
            $result = resta($op1, $op2);
            $html.="<h2> Cuenta = ".$op1."-".$op2."</h2>";
            $html.= "<h2> Resultado: ".$result."</h2>";
        }else{
            $html.="<h2> Valores vacios!!! D: </h2>";
        }
        $html.='</body></html>';
        return $html;
    }
    function getdivision($op1,$op2){
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>About</title>
        </head>
        <body>';

        if (isset($op1)&& isset($op2)){
            $result = division($op1, $op2);
            if($result=='err'){
                $html.="<h2>error, no se puede dividir por 0";
            }else{
                $html.="<h2> Cuenta = ".$op1."/".$op2."</h2>";
                $html.= "<h2> Resultado: ".$result."</h2>";
            }
        }else{
            $html.="<h2> Valores vacios!!! D: </h2>";
        }
        $html.='</body></html>';
        return $html;
    }
    function getmultiplicacion($op1,$op2){
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>About</title>
        </head>
        <body>';

        if (isset($op1)&& isset($op2)){
            $result = multiplicacion($op1, $op2);
            $html.="<h2> Cuenta = ".$op1."*".$op2."</h2>";
            $html.= "<h2> Resultado: ".$result."</h2>";
        }else{
            $html.="<h2> Valores vacios!!! D: </h2>";
        }
        $html.='</body></html>';
        return $html;
    }

?>