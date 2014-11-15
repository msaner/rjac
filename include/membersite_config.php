<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('teamsaner.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('mike@teamsaner.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'teamsaner.db.10540327.hostedresource.com',
                      /*username*/'teamsaner',
                      /*password*/'st!THecr3@hAB2xu',
                      /*database name*/'teamsaner',
                      /*table name*/'rjacusers');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>