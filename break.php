<?php 
$counter = 1;

while(true) {
    echo "ini while loop ke-$counter" . PHP_EOL;
    $counter++;

    if($counter > 10) {
        break;
    }
}

?>