<!-- include adds doctype, head and page header -->
<?php include "global/header.php"; ?>

<!-- page body -->
<main>
	<iframe width="565" height="335" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=4200%20East%20Avenue%20Suite%20%23102%20Livermore%2C%20CA%2094550%20&key=AIzaSyBSmvBqeZxu5CSJNYLQkAV9q199WOFM30M"></iframe>

    <div class="office-hours-container">
		<h2>Office Hours</h2>
        <div class="blue-boxes">
			<table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th></th>
                        <th><h4>Morning</h4></th>
                        <th><h4>Afternoon</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h5>M</h5></td>
                        <td>7:OOa - 11:30a</td>
                        <td>2:30p - 6:00p</td>
                    </tr>
                    <tr>
                        <td><h5>T</h5></td>
                        <td>closed</td>
                        <td>closed</td>
                    </tr>
                    <tr>
                        <td><h5>W</h5></td>
                        <td>7:OOa - 11:30a</td>
                        <td>2:30p - 6:00p</td>
                    </tr>
                    <tr>
                        <td><h5>Th</h5></td>
                        <td>closed</td>
                        <td>2:30p - 6:00p</td>
                    </tr>
                    <tr>
                        <td><h5>F</h5></td>
                        <td>7:OOa - 11:30a</td>
                        <td>closed</td>
                    </tr>
                </tbody>
            </table>
            <p class="p-last">Closed weekends &amp; major holidays.</p>
        </div>
        <img src="images/office-front.jpg" alt="ammon chiropractic office exterior" class="ptm">
    </div>
    
    <div class="contact-types content-container">	
        <div>
            <h2>Address</h2>
            <img src="images/icons/address.png" alt="address icon of an office building" class="img-float-left">
            <p>4200 East Ave. Suite #102<br>
                Livermore, CA 94550
            </p>
        </div>
        <div>
            <h2>Phone</h2>
            <img src="images/icons/phone.png" alt="telephone icon" class="img-float-left">
            <p>510.555.5353</p>
        </div>
        <div>
            <h2>Email</h2>
            <img src="images/icons/email.png" alt="email icon" class="img-float-left">
            <p><a href="mailto:#">info@rjac.com</a></p>
        </div>
    </div>
    
    <div class="contact-form blue-boxes">
        <div id="contact-form-col1">
            <h3>Send Us A Note</h3>
            <p>Do you have a question or concern that you would like to speak to us about?</p>
            <p>Fill out this short form and it will be sent to our office.  We will follow up with you within two business days.  If you need a quicker response please give us a call. We would love to hear from you.</p>
            <p>Sincerly,</p>
            <p>The RJAC Team</p>
        </div>
    <form id="contactRequest" method="post" action="send_form_email.php"
            	data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
				data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" />
        <div id="contact-form-col2">
            <img src="images/icons/numbered-steps-sm-1.jpg" alt="step number one icon">
            
            
            <div class="form-group">
            	<label class="control-label" for="fullname"></label>
                <div>
                	<input id="full-name" name="fullname" type="text" placeholder="Full Name" class="form-control input-md"
                    	data-bv-notempty="true"
                        data-bv-notempty-message="You forgot to enter your name." />
                </div>
            </div>

            <p>How should we reach you?</p>
            
            	<script type="text/javascript">
					$(document).ready(function(){
						$('input[type="radio"]').click(function(){
							if($(this).attr("value")=="0"){
								$(".box").hide();
								$(".email").show();
							}
							if($(this).attr("value")=="1"){
								$(".box").hide();
								$(".phone").show();
							}
						});
					});				
				</script>

            <div class="form-group">
                <label class="control-label" for="contactpref"></label>
                <div>
                    <div class="radio">
                        <label for="contact-pref-0">
                        	<input type="radio" data-toggle="radio" name="contactpref" id="contact-pref-0" value="0" checked="checked"
							data-bv-regexp-regexp="\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b" />
                            Email
                        </label>
                    </div>
                    <div class="radio">
                        <label for="contact-pref-1">
                        <input type="radio" data-toggle="radio" name="contactpref" id="contact-pref-1" value="1" />
                        Phone
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group email box">
  				<label class="control-label" for="email"></label>  
  				<input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" title="" data-original-title="we will email you a confirmation that this form was delivered." 
                data-bv-notempty="true"
                data-bv-notempty-message="You forgot to enter your email address."
                data-bv-emailaddress="true"
                data-bv-emailaddress-message="Not a valid email: example@google.com" />
			</div>
            <div class="form-group phone box" style="display:none;">
  				<label class="control-label" for="phone"></label>  
  				<input id="phone" name="phone" type="text" placeholder="Phone" class="form-control"
					data-bv-notempty="true"
                    data-bv-notempty-message="You forgot to enter your phone number."
					data-bv-regexp="true"
					data-bv-regexp-regexp="\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})"
					data-bv-regexp-message="Invalid phone number."
				/>
			</div>
      
        </div>
        
        <div id="contact-form-col3">
            <img src="images/icons/numbered-steps-sm-2.jpg" alt="step number two icon>">
            <p>What is this regarding? (check all that apply)</p>
            
            <div class="form-group">
                    <div class="checkbox">
                        <label for="contact-reason-0">
                        <input type="checkbox" data-toggle="checkbox" name="contactreason[]" id="contact-reason-0" value="Appointments" 
                        data-bv-choice="true"
                        data-bv-choice-min="1"
                        data-bv-choice-message="Please check at least one."
                        />
                            Appointments
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="contact-reason-1">
                        <input type="checkbox" data-toggle="checkbox" name="contactreason[]" id="contact-reason-1" value="Billing/Payments" />
                            Billing/Payments
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="contact-reason-2">
                        <input type="checkbox" data-toggle="checkbox" name="contactreason[]" id="contact-reason-2" value="Medical Question" />
                            Medical Question
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="contact-reason-3">
                        <input type="checkbox" data-toggle="checkbox" name="contactreason[]" id="contact-reason-3" value="Insurance" />
                            Insurance
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="contact-reason-4">
                        <input type="checkbox" data-toggle="checkbox" name="contactreason[]" id="contact-reason-4" value="Other" />
                            Other
                        </label>
                    </div>
            </div>
            
            <p>Thank you for contacting us.</p>
            <p class="sub-text">If this is a serious or life threatening medical emergency dial 911 or call your local Police or Fire Department.</p>
        	
            <div class="form-group">
                <label class="control-label" for="submit-contact-request"></label>
                <div>
                    <button id="submit-contact-request" type="submit" name="submit-contact-request" class="btn btn-info">Send</button>
                </div>
            </div>
        </div><br>
</form>
    </div>
</main>
<script>
	$(document).ready(function() {
		$('#contactRequest').bootstrapValidator();
	});
</script>
<script>
$(document).ready(function () {
	$('input[title]').tooltip({trigger: 'focus', container: 'body'});
});
</script>

<!-- include adds page footer and closing body & html tags -->
<?php include "global/footer.php"; ?>