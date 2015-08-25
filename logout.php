<?php
session_start();
if(isset($_SESSION['name'])){
	session_unset($_SESSION['name']);
	session_destroy();
	$message = "<center style='color: black;'>Logged Out!</center>";
}

header("Location: index.php?message=".$message);
?>