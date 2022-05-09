<?php 
//mengakses array tanpa foreach

$array = ["Maha", "Dwi", "Putra"];

for($i=0;$i < count($array);$i++){
    echo "Data Ke-$i = $array[$i]" . PHP_EOL;
}

//mengakses array menggunakan foreach
foreach($array as $value){
    echo $value . PHP_EOL;
}

$person = [
    "Nama" => "Maha Dwi Putra",
    "Umur" => "20",
    "Alamat" => "Jl.Kaliurang"
];

foreach($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}

?>