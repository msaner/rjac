<?php 
session_start();

$username="teamsaner"; 
$password="st!THecr3@hAB2xu";

$db = new PDO('mysql:host=teamsaner.db.10540327.hostedresource.com;dbname=teamsaner', $username, $password);

$staffusername = $_POST['username'];
$staffpassword = $_POST['password'];

$stmt = $db->prepare('SELECT username, password FROM staff WHERE username=? and password=?');
$stmt->execute(array($staffusername, $staffpassword));
$stmtCount = $stmt->rowCount();

if($stmtCount==1){
	$_SESSION["username"] = $staffusername;	
	$_SESSION["password"] = $staffpassword;
	header("Location: http://www.teamsaner.com/rjac/patient-directory.php");
	die;
} else {
	echo "Wrong Username or Password";	
	die;
}

?>