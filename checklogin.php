<?php
session_start(); 
$username="teamsaner"; 
$password="st!THecr3@hAB2xu";

$db = new PDO('mysql:host=teamsaner.db.10540327.hostedresource.com;dbname=teamsaner', $username, $password);

$email = $_POST['emailAddress'];
$password = $_POST['password'];

$stmt = $db->prepare('SELECT email, password FROM patients WHERE email=? and password=?');
$stmt->execute(array($email, $password));
$stmtCount = $stmt->rowCount();

if($stmtCount==1){
	$_SESSION["email"] = $email;	
	$_SESSION["password"] = $password;
	header("Location: http://www.teamsaner.com/rjac/vip-account.php");
} else {
	echo "Wrong Username or Password";	
}

?>