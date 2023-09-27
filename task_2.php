<?php

//Task 2: Array Manipulation

$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumbers(&$array) {
    $array = array_filter($array, function($value) {
        return $value % 2 != 0;
    });
}

removeEvenNumbers($numbers);

print_r($numbers);
?>