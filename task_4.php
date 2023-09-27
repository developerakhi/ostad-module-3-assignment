<?php

$studentGrades = [
    "Student1" => ["Math" => 85, "English" => 92, "Science" => 78],
    "Student2" => ["Math" => 88, "English" => 95, "Science" => 90],
    "Student3" => ["Math" => 75, "English" => 80, "Science" => 85]
];

function calculateAndPrintAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        echo "Average grade for $student: $average\n";
    }
}
calculateAndPrintAverageGrades($studentGrades);
?>