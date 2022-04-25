<?php 
$gender = "PRIA";
$hi = null;

// if($gender == "PRIA"){
//   $hi = "Hi Bro";
// }else {
//   $hi = "Hi Nona";
// }


$hi = $gender == "PRIA" ? "Hi Bro" . PHP_EOL : "Hi Nona" . PHP_EOL;
echo $hi . PHP_EOL;

?>