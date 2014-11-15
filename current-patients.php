<!-- include adds doctype, head and page header -->
<?php include "global/header.php"; ?>

<!-- page body -->
<main>
	<div class="vip-ad">
    	<a href="vip.php"><img src="images/vip-ad_03.jpg" alt="join the RJAC VIP club, benefits so good they'll have you jumping for joy!"></a>
        <div class="blue-boxes">
        	<h3>Very Important Patient - VIP Benefits</h3>
            <div class="thirds">
            	<p>&bull; Quick Chart&trade;</p>
            	<p class="p-last">&bull; Faster Check-In Times</p>
            </div>
            <div class="thirds">
            	<p>&bull; Member Only Discounts</p>
            	<p class="p-last">&bull; Priority Appointments</p>
            </div>
            <div class="thirds">
            	<p>&bull; Health &amp; Fitness Newsletter</p>
            </div>
        </div>
    </div>
    
    <!-- login form -->
    <?php include "global/login-form.php"; ?>

    <div class="content-container">
		<h1>Welcome Back!</h1>
        <p>If you need to update any of the forms we have on file please use the download links below, fill them out and bring the form(s) with you to your next appointment.</p>
     
        <p>We ask that you arrive at least 10 minutes before your appointment time.  </p>
    </div>
    
	<h3>Downloads</h3>
    <div class="patient-forms">
		<div>
			<p><img src="images/icons/pdf.jpg" alt="PDF icon"> <a href="downloads/current-patient-forms.pdf"> All Forms</a></p>
        </div>
        <div>
        	<p><img src="images/icons/pdf.jpg" alt="PDF icon"> <a href="downloads/update-report.pdf"> Update Report</a></p>
        	<p><img src="images/icons/pdf.jpg" alt="PDF icon"> <a href="downloads/informed-consent.pdf"> Informed Consent</a></p>
        </div>
        <div>
        	<p><img src="images/icons/pdf.jpg" alt="PDF icon"> <a href="downloads/initial-health-status.pdf"> Initial Health Status</a></p>
        	<p><img src="images/icons/pdf.jpg" alt="PDF icon"> <a href="downloads/emergency-contact.pdf"> Emergency Contact</a></p>
        </div>
        <div>
        	<p><img src="images/icons/pdf.jpg" alt="PDF icon"> <a href="downloads/hippa-guidlines-privacy-notice.pdf"> HIPPA/Privacy Notice</a></p>
        </div>
	</div>
</main>

<!-- include adds page footer and closing body & html tags -->
<?php include "global/footer.php"; ?>