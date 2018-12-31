<?php  
$server = 'localhost';
$user	= 'root';
$pass 	= '';
$dbname	= 'poco_queue';
mysql_connect($server, $user, $pass)or die(mysql_error());
mysql_select_db($dbname);
?>