<?php
session_start();
//include connect.php page for database connection
include('connect.php');

if(isset($_POST['submit'])!='')
{
	$sql = "insert into patients(
								first-name,
								last-name,
								dob,
								email,
								phone,
								zip,
								street,
								city,
								state,
								password,
								confirmPassword
								) values(
										'".$_REQUEST['first-name']."',
										'".$_REQUEST['last-name']."',
										'".$_REQUEST['dob']."', 
										'".$_REQUEST['email']."',
										'".$_REQUEST['phone']."',
										'".$_REQUEST['zip']."', 
										'".$_REQUEST['street']."',
										'".$_REQUEST['city']."',
										'".$_REQUEST['state']."',
										'".$_REQUEST['password']."', 
										'".$_REQUEST['confirmPassword']."')";
										
	$_SESSION['email'] = $_POST['email'];
};
?>