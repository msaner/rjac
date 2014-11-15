<?php
session_start();

$username="teamsaner"; 
$password="st!THecr3@hAB2xu";

$db = new PDO('mysql:host=teamsaner.db.10540327.hostedresource.com;dbname=teamsaner', $username, $password);

if ($_SERVER['REQUEST_METHOD']=='POST') { 

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$zip = $_POST['zip'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$patientPassword = $_POST['password'];
$encryptPass = md5($patientPassword);

$stmt = $db->prepare("INSERT INTO patients(
									firstName, 
									lastName, 
									dob, 
									email, 
									phone, 
									zip, 
									street, 
									city, 
									state, 
									password
									) VALUES(
										'$firstName',
										'$lastName',
										'$dob',
										'$email',
										'$phone',
										'$zip',
										'$street',
										'$city',
										'$state',
										'$encryptPass'											
										);");
$stmt->bindParam(':firstName',$firstName);
$stmt->bindParam(':lastName',$lastName);
$stmt->bindParam(':dob',$dob);
$stmt->bindParam(':email',$email); 
$stmt->bindParam(':phone',$phone);
$stmt->bindParam(':zip',$zip);
$stmt->bindParam(':street',$street);
$stmt->bindParam(':city',$city);
$stmt->bindParam(':state',$state); 
$stmt->bindParam(':password',$encryptPass);

$stmt->execute();

$_SESSION['email'] = $email;

header("Location: http://www.teamsaner.com/rjac/vip-account.php");
}

?>

