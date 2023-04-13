<!-- Create a function that will return the number of minutes, in hours and minutes. The 
function should accept only one argument.
E.g. If we call the function and pass the number of minutes 200 we should get the 
message "200 minutes = 3 hour(s) and 20 minute(s)." -->

<?php
function convertToHoursMinutes($minutes) {
    if (!is_numeric($minutes)) {
        echo "Error: The argument must be a number.";
        return;
    }
    
    $hours = floor($minutes / 60);
    $minutes = $minutes % 60;
    
   
    echo "$minutes minutes = $hours hour(s) and $minutes minute(s).";
}

convertToHoursMinutes(200); 
?>

