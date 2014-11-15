<?php

$username="teamsaner"; 
$password="st!THecr3@hAB2xu";

$db = new PDO('mysql:host=teamsaner.db.10540327.hostedresource.com;dbname=teamsaner', $username, $password);

if ($_SERVER['REQUEST_METHOD']=='POST') { 

$symptoms = $_POST['symptoms'];
$symptomCause = $_POST['symptomCause'];
$symptomCauseExplain = $_POST['symptomCauseExplain'];
$symptomBegan = $_POST['symptomBegan'];

	$symptomLocation = $_POST['symptomLocation'];  //array of textbox values.  
	var_dump($symptomLocation);
	//lets get the into a string.
	$allLocations = "";
	
	//loop through each checkbox value
	foreach($symptomLocation as $location) {
		$allLocations .= $location . ", ";	
	}
	//get rid of the last ", " at end of string
	$allLocations = substr($allLocations, 0, -2);

$painType = $_POST['painType']; //array of textbox values.  
var_dump($painType);
//lets get the into a string.
$allTypes = "";

//loop through each checkbox value
foreach($painType as $type) {
	$allTypes .= $type . ", ";	
}
//get rid of the last ", " at end of string
$allTypes = substr($allTypes, 0, -2);

$painTypeExplain = $_POST['painTypeExplain'];
$percentPresent = $_POST['percentPresent'];
$painScale = $_POST['painScale'];

	$painWorse = $_POST['painWorse']; //array of textbox values.  
	var_dump($painWorse);
	//lets get the into a string.
	$allWorse = "";
	
	//loop through each checkbox value
	foreach($painWorse as $worse) {
		$allWorse .= $worse . ", ";	
	}
	//get rid of the last ", " at end of string
	$allWorse = substr($allWorse, 0, -2);
	
$painWorseExplain = $_POST['painWorseExplain'];
$otherDrs = $_POST['otherDrs'];
$otherDrsExplain = $_POST['otherDrsExplain'];

	$treatmentDone = $_POST['treatmentDone']; //array of textbox values.  
	var_dump($treatmentDone);
	//lets get the into a string.
	$allTreatment = "";
	
	//loop through each checkbox value
	foreach($treatmentDone as $treatment) {
		$allTreatment .= $treatment . ", ";	
	}
	//get rid of the last ", " at end of string
	$allTreatment = substr($allTreatment, 0, -2);
	
$treatmentDoneExplain = $_POST['treatmentDoneExplain'];

$email = $_POST['email'];

/*$stmt=$db->prepare("SELECT * FROM patients WHERE email =?");
$stmt->execute(array($_SESSION['email']));
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	$patientId = $row['id'];
}
*/
$stmt = $db->prepare("INSERT INTO patient_details(
												symptoms,
												symptomCause,	
												symptomCauseExplain,
												symptomBegan,
												symptomLocation,
												painType,
												painTypeExplain,
												percentPresent,
												painScale,
												painWorse,
												painWorseExplain,
												otherDrs,
												otherDrsExplain,
												treatmentDone,
												treatmentDoneExplain,
												email
												) VALUES(
														'$symptoms', 
														'$symptomCause', 
														'$symptomCauseExplain', 
														'$symptomBegan', 
														'$allLocations',
														'$allTypes', 
														'$painTypeExplain', 
														'$percentPresent', 
														'$painScale', 
														'$allWorse',
														'$painWorseExplain',
														'$otherDrs',
														'$otherDrsExplain',
														'$allTreatment',
														'$treatmentDoneExplain',
														'$email'													
														);");
$stmt->bindParam(':symptoms',$symptoms);
$stmt->bindParam(':symptomCause',$symptomCause);
$stmt->bindParam(':symptomCauseExplain',$symptomCauseExplain);
$stmt->bindParam(':symptomBegan',$symptomBegan); 
$stmt->bindParam(':symptomLocation',$symptomLocation);
$stmt->bindParam(':painType',$painType);
$stmt->bindParam(':painTypeExplain',$painTypeExplain);
$stmt->bindParam(':percentPresent',$percentPresent);
$stmt->bindParam(':painScale',$painScale); 
$stmt->bindParam(':painWorse',$painWorse);
$stmt->bindParam(':painWorseExplain',$painWorseExplain);
$stmt->bindParam(':otherDrs',$otherDrs);
$stmt->bindParam(':otherDrsExplain',$otherDrsExplain);
$stmt->bindParam(':treatmentDone',$treatmentDone);
$stmt->bindParam(':treatmentDoneExplain',$treatmentDoneExplain);
$stmt->bindParam(':email',$email);

$stmt->execute();


//header("Location: http://www.teamsaner.com/rjac/vip-account.php");
}

?>

