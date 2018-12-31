<?php  
session_start();
include '../Server/connection.php';
$uname = $_POST['uname'];
$passwd = $_POST['passwd'];

$x = mysql_query("SELECT * FROM users WHERE uname='$uname'");
$y = mysql_fetch_array($x);

if($passwd = $y['passwd']){
	$_SESSION['PHPSESSID'] = $y['uname'];
	$_SESSION['user_active'] = $y['full_name'];
	header('location: /');
}else{
	echo "Username / Password Not Registered!!!<a href='index'></a>";
	
}
?>