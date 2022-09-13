<?php
$x = rand(-10, 10);
    echo "<span span style = \" color: purple;\">температура:. </span>" . $x; 

if ($x < 0){
    echo "мороз";
} 

elseif ($x > 0){
    echo "тепло";
}

else {
    echo "не тепло и не мороз";
}
?>

