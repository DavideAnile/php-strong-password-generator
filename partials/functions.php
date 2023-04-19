<?php


function createPassword(){
    
    $length = $_GET['length'];
    $charachters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789?.%&!$';
    $charachtersLength = strlen($charachters);
    
    $password = [];
    
    for($i = 0; $i < $length; $i++){
    
        $number = rand(0, $charachtersLength);
        $password[] = $charachters[$number];
    
    }

    return implode($password);
}