<!-- include adds doctype, head and page header -->
<?php include "global/header.php"; ?>
<!--<script type="text/javascript" src="js/ziptastic.js"></script>-->

<!-- page body -->
<main>
	<div class="vip-ad">
    	<h1>RJAC VIP Club</h1>
        <p>While all of our patients are important, the RJAC VIP (Very Important Patient) Club lets us show you just how much we appreciate you.</p>
        <p>By signing up you'll be able to update your own patient chart online, any time, any where. Have a new phone number or area of discomfort you'd like us to know about? Update it online!</p>
        <p>Other benefits include priority scheduling, special discounts and other great perks throughout the year. It's all part of our effort to show you just how very important you really are!</p>
    </div>
    
    <!-- login form -->
    <?php include "global/login-form.php" ?>
	
    
<div class="content-container">
    <h1>Join The Club</h1>
	
    <div class="blue-boxes join-vip-form">
    
        <div id="page-wrap">
        <form id='register' name="registration" action="registration.php" method="post"
            	data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
				data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" >
            <div class="form-group">
                <label class="control-label" for="first-name"></label>                  
                    <input id="first-name" name="first-name" type="text" placeholder="First Name" class="form-control" 
                    	data-bv-notempty="true"
						data-bv-notempty-message="We need to know what to call you." >
            </div>
            
            <div class="form-group">
                <label class="control-label" for="last-name"></label>  
                    <input id="last-name" name="last-name" type="text" placeholder="Last Name" class="form-control"
                    data-bv-notempty="true"
					data-bv-notempty-message="Did you forget your last name?" >               
            </div>
          
            <div class="form-group">
                <label class="control-label" for="dob"></label>  
                    <input id="dob" name="dob" type="text" placeholder="Date of Birth" class="form-control"
                    	data-bv-notempty="true"
                        data-bv-notempty-message="Please enter your date of birth."
                        data-bv-regexp="true"
                        data-bv-regexp-regexp="^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d$">
                        <!-- regexp validates based on mm/dd/yyyy format -->
            </div>
            
            <div class="form-group">
                <label class="control-label" for="email"></label>  
                    <input id="email" name="email" type="text" placeholder="Email Address" class="form-control"
						data-bv-notempty="true"
                        data-bv-notempty-message="You forgot to enter your email address."
                        data-bv-emailaddress="true"
                        data-bv-emailaddress-message="Not a valid email: example@google.com" >
            </div>
            
            <div class="form-group">
                <label class="control-label" for="phone"></label>  
                    <input id="phone" name="phone" type="text" placeholder="Phone Number" class="form-control"
                        data-bv-notempty="true"
                        data-bv-notempty-message="You forgot to enter a phone number."
                        data-bv-regexp="true"
                        data-bv-regexp-regexp="\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})"
                        data-bv-regexp-message="Invalid phone number format." >
            </div>
            
            <div class="form-group">
                <label class="control-label" for="zip-code"></label>  
                    <input type="text" placeholder="Zip Code" pattern="[0-9]*" maxlength="5" name="zip" id="zip" class="form-control zip-code"
                        data-bv-notempty="true"
                        data-bv-notempty-message="You forgot to enter your zip code"
                        data-bv-between="true"
                        data-bv-between-min="90001"
                        data-bv-between-max="96162">
            </div>
            
            <div class="form-group">
                <label class="control-label" for="street-address"></label>  
                    <input id="street-address" name="street" type="text" placeholder="Street Address" class="form-control" 
						data-bv-notempty="true"
                        data-bv-notempty-message="Please enter your street address." >
            </div>
            
            <div class="form-group city-wrap">
                <label class="control-label" for="city"></label>  
                    <input id="city" name="city" type="text" placeholder="City" class="form-control"
                    	data-bv-notempty="true"
                        data-bv-notempty-message="Enter your city." >
            </div>
            
            <div class="form-group state-wrap">
                <label class="control-label" for="state"></label>  
                <div class="state-wrap">
                    <input id="state" name="state" type="text" placeholder="CA" class="form-control" >
                </div>
            </div>

            <p>Your email address will be your username.</p>
            <div class="form-group">
                <label class="control-label" for="password"></label>
                    <input type="password" placeholder="Password" class="form-control" name="password" value=""
                       	data-bv-notempty="true" data-bv-notempty-message="A password is required." 
                       	data-bv-stringlength="true"
						data-bv-stringlength-min="8" 
                        data-bv-stringlength-message="Your password needs to be at least 8 characters long.">
            </div>

            <div class="form-group">
                <label class="control-label" for="confirmPassword"></label>
					<input type="password" placeholder="Confirm Password" class="form-control" name="confirmPassword" value=""
                        data-bv-notempty="true" data-bv-notempty-message="A password is required."
                        data-bv-identical="true" data-bv-identical-field="password" data-bv-identical-message="Both password fields must match." >
    		</div>            
            <!-- Button -->
			<button id="sign-up" type="submit" value="submit" class="btn btn-info">Sign Up</button>
            </form>
		</div>
        
	</div>
	
    
    <div id="vip-row1">
        <div>
            <img src="images/special-discounts.jpg" alt="RJAC VIP Club members get special discounts">
        </div>
        <div>
            <img src="images/priority-scheduling.jpg" alt="RJAC VIP Club members get priority appointment scheduling">
        </div>
    </div>
    <div id="vip-row2">
        <div>
            <img src="images/bonus-gifts.jpg" alt="RJAC VIP Club members get special discounts">
        </div>
        <div>
            <img src="images/coming-soon.jpg" alt="RJAC VIP Club members get priority appointment scheduling">
        </div>
    </div>    
</div>
</main>
<script>
$(document).ready(function () {
	$('input[title]').tooltip({trigger: 'focus', container: 'body'});
	
});
</script>

<!-- include adds page footer and closing body & html tags -->
<?php include "global/footer.php"; ?>