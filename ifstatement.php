<?php 
$nilai = 75;
$absen = 90;

if($nilai >= 98 && $absen >= 90) :
  echo "Lulus, Nilai A" .PHP_EOL;
elseif($nilai >= 80 && $absen >= 90) :
  echo "Lulus, Nilai B" .PHP_EOL;
elseif($nilai >= 70 && $absen >= 90) :
  echo "Lulus, Nilai C" .PHP_EOL;
else :
  echo "Tidak Lulus" .PHP_EOL;

endif;

?>