<?php

$value1 = 'Rafa';
$value2 = 'Rafa Fausta Muliawan';

setcookie('panggilan', $value1);
setcookie('namalengkap', $value2, time()+3600);

echo '<h1>Halaman ini adalah halaman pengesetan cookie</h1>';
echo '<h2>Klik <a href="cookie02.php">di sini</a> untuk pemeriksaan cookie</h2>';

?>