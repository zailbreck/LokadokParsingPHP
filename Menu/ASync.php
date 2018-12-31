<?php  
$file_name = 'new_patient_update';
$file_url = 'https://www.lokadok.co.id/get/arrival?id=alfuadirs&passkey=abc123def&place=29104&type=json&unread=1';
$base_name = basename($file_name);
$base_dir = 'C:/xampp/htdocs/poco/Menu/';

//Cek Data Lama Ada Atau Tidak , Jika Ada akan DiHapus
if(file_exists($file_name)){
	unlink($file_name);
}
 //Cek Jika Tidak Ada Data Maka, Akan Melakukan Sync Dengan Pusat
if(!file_exists($file_name)){
	header("Content-Type: application/octet-stream");
	header("Content-Transfer-Encoding: Binary"); 
	header(sprintf('Content-disposition: attachment; filename="%s"', $base_name)); 
	
	$a = readfile($file_url);
	file_put_contents('C:/xampp/htdocs/poco/Menu', $a);
}
?>