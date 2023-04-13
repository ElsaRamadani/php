<?php
function calculateGrades($math, $physics, $english) {

    if (!is_numeric($math) || !is_numeric($physics) || !is_numeric($english)) {
        echo "Error: All grades must be numeric.";
        return;
    }
    

    $sum = $math + $physics + $english;
    $average = $sum / 3;
    
    echo "Sum: $sum<br>";
    echo "Average: $average";
}

calculateGrades(3, 4, 5); 
?>
