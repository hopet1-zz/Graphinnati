<?php

$positive = "<center style='color: black;'>Successful Sign Up!</center>";
$negative = "<center style='color: black;'>Whoops! Looks like some fields were left empty; please try again.</center>";

$databaseName = 'localhost:/tmp/mysql.sock';
$databaseUserName = 'root';
$databasePassword = '';
$link = mysql_connect($databaseName, $databaseUserName, $databasePassword);
if (!$link) {
	//die('Not connected : ' . mysql_error());
	echo "Connection could not be established.";
}
 
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$pNumber = $_POST['phoneNumber'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);



$message;

if(anyEmpty($fname, $lname, $pNumber, $username, $password)){
	$message = $negative;
}else{
	//Insert data.
	mysql_select_db('Graphinnati');
	$sql = "INSERT INTO Accounts (FirstName, LastName, PhoneNumber, Username, Password) VALUES ('$fname', '$lname', '$pNumber', '$username', '$password')";
	$result = mysql_query($sql, $link);
	if(!$result){
		echo "No result could be established.";
	}
	else{
		$message = $positive;
	}
}

function anyEmpty($fname, $lname, $pNumber, $username, $password){
	if(empty($fname) || empty($lname) || empty($pNumber) || empty($username) || empty($password))
		return true;
	return false;
}

mysql_close($link);
//create php database entry page that will redirect to the main sign up page once complete
header("Location: createAccount.php?message=".$message);
?>