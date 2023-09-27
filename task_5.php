<?php

function generatePassword($length){

    $lowercaseletter = "abcdefghijklmnopqrstuvwxyz";
    $uppercaseletter = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = '0123456789';
    $specialcharacters = "(!@#$%^&*()_+)";

    $allCharacters = $lowercaseletter . $uppercaseletter . $numbers . $specialcharacters;

    $password = "";

    $characterSetLength = strlen($allCharacters);

    for($i=0; $i<$length; $i++){
        $randomIndex = mt_rand(0,$characterSetLength-1);
        $password .= $allCharacters[$randomIndex];
    }
    return $password;

}

$generatePassword = generatePassword(12);
 echo "Generated Password: $generatePassword\n";
?>