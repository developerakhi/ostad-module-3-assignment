<?php

//Task 3: Array Sorting  

$grades = [85, 92, 78, 88, 95];
    function sortGradesDescending($array){
        rsort($array);
        return $array;
    }
    $sortedGrades = sortGradesDescending($grades);

    print_r($sortedGrades);

?>