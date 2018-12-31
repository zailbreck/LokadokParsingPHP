<?php  
$sumber = 'contoh.json';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>