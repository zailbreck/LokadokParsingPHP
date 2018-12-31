<?php
date_default_timezone_set("Asia/Jakarta");
$b = time();
$hour = date("G",$b);
if ($hour>=0 && $hour<=11){
	$kondisi = 'Pagi, ';
}
elseif ($hour >=12 && $hour<=14){
	$kondisi = 'Siang, ';
}
elseif ($hour >=15 && $hour<=18){
	$kondisi = 'Sore, ';
}
elseif ($hour >=19 && $hour<=23){
	$kondisi = 'Malam, ';
}
?>