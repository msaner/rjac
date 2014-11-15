<?php
 
if(isset($_POST['email'])) {
 
    $email_to = "mike@teamsaner.com"; 
    $email_subject = "RJAC Contact Request";
 
    // validation expected data exists
 
    if(!isset($_POST['fullname']) || 
        !isset($_POST['contactpref']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['contactreason'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
  
    $fullname = $_POST['fullname'];
 
    $contactpref = $_POST['contactpref']; 
 
    $email_from = $_POST['email'];
 
    $phone = $_POST['phone'];
 
    $contactreason = $_POST['contactreason']; //array of textbox values.  
	var_dump($contactreason);
	//lets get them into a string.
	$allreasons = "";
	//loop through each checkbox value
	foreach($contactreason as $reason) {
		$allreasons .= $reason . ", ";	
	}
	//get rid of the last ", " at end of string
	$allreasons = substr($allreasons, 0, -2);
     

    $email_message = "The following person has filled out the Contact Request form online. Use the information below to contact them before the end of business. \n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Name: ".clean_string($fullname)."\n";
    $email_message .= "Contact By: ".clean_string($contactpref)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Contact Regarding: ".clean_string($allreasons)."\n";
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>
