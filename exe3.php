<!-- Define an associative array and output array elements on the screen. Use for this 
cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon 
etc.). -->

<?php
$characters = array(
    "Mickey Mouse" => "Disney",
    "Super Mario" => "Nintendo",
    "Goku" => "Dragon Ball",
    "Pokemon" => "Nintendo"
);

foreach ($characters as $character => $franchise) {
    echo "$character is a character from $franchise.<br>";
}
?>