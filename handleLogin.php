<?php

$negative = "<center style='color: black;'>Whoops! Looks like some fields were left empty; please try again.</center><br>";
$error = "<center style='color: black;'>Incorrect login; please try again.</center><br>";

$databaseName = 'localhost:/tmp/mysql.sock';
$databaseUserName = 'root';
$databasePassword = '';
$link = mysql_connect($databaseName, $databaseUserName, $databasePassword);
if (!$link) {
	//die('Not connected : ' . mysql_error());
	echo "Connection could not be established.";
}
 
$username = $_POST['username'];
$password = $_POST['password'];
$message;

if(anyEmpty($username, $password)){
	$message = $negative;
	header("Location: login.php?message=".$message);
}else{
	mysql_select_db('Graphinnati');
	$sql = "SELECT * FROM Accounts where Username='".$username."'";
	$result = mysql_query($sql, $link);
	$row = mysql_fetch_array($result);
	if(!empty($row['Username']) AND password_verify($password, $row['Password'])){
		session_start();
		$_SESSION['name'] = $username;
		header("Location: index.php");
	}
	else{
		$message = $error;
		header("Location: login.php?message=".$message);
	}
}

function anyEmpty($username, $password){
	if(empty($username) || empty($password))
		return true;
	return false;
}

mysql_close($link);
?>