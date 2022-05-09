<?php 
function sayHello($name = "Anonymus"){
    echo "Hello $name" . PHP_EOL;
}

sayHello();
sayHello("Maha");

function sum(int $first, int $second){
    $total = $first + $second;
    echo "Total $first + $second = $total" . PHP_EOL;
}

sum(1,2);
sum("23", "1");

// variable length argument list
function sumAll(...$values){
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values). " = $total" . PHP_EOL;
}
$values = [1,3,4,3];
sumAll(1,2,3);
sumAll(...$values);


?>