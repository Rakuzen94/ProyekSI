<?php
if (!isset($_SESSION["user"])) {
	header("Location: login.php"); 
	session_destroy();
}
	
?>