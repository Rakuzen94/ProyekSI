<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "busanshirt";

try {
	$db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass, array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	));
}catch(PDOException $e){
	die("Terjadi masalah:" . $e->getMessage());
}

?>