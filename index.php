<?php  
session_start();
if(!isset($_SESSION['PHPSESSID'])){
	header('location: /Menu');
}else{
	header('location: /Menu/Dashboard');
}
?>