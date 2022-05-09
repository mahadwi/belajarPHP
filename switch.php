<?php 
$nilai = "A";

switch($nilai) {
  case "A" :
    echo "Anda lulus dengan nilai terbaik" .PHP_EOL;
    break;
  case "B" :
  case "C" :
    echo "Anda lulus" .PHP_EOL;
    break;
  case "D" :
    echo "Anda tidak lulus" .PHP_EOL;
    break;
  default :
    echo "Mungkin anda tidak mengikuti ujian" .PHP_EOL;
}

switch($nilai): 
  case "A"    : 
    echo "Anda lulus dengan nilai terbaik" .PHP_EOL;
    break;
  case "B"    : 
  case "C"    : 
    echo "Anda lulus" .PHP_EOL;
    break;
  case "D"    : 
    echo "Anda tidak lulus" .PHP_EOL;
    break;
  default     : 
    echo "Mungkin anda salah jurusan" .PHP_EOL;
endswitch;


?>