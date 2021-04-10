<?php

    function suma($op1,$op2){
       return $op1 + $op2;
    }
    function resta($op1,$op2){
        return $op1 - $op2;
    }
    function division($op1,$op2){
        if ($op2 == 0){
            echo 'Error: no se puede dividir por 0';
            die();
        }
        return $op1 / $op2;
    }
    function multiplicacion($op1,$op2){
        return $op1 * $op2;
    }

?>