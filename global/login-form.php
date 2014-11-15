<div class="vip-login">
	<h1>VIP Login</h1>
	<div class="blue-boxes">
    
        <form id="contactRequest"  method="post" action="checklogin.php"
        data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
        data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
        data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" >
            
            <div class="form-group">
                <div>
                	<input type="text" placeholder="Email Address" name="emailAddress" class="form-control"
                    data-bv-notempty="true"
                    data-bv-notempty-message="You forgot to enter your email address."
                    data-bv-emailaddress="true"
                    data-bv-emailaddress-message="Not a valid email: example@google.com" >
                </div>
            </div>
			<div class="form-group">
                <div>
                	<input type="password" placeholder="Password" name="password" class="form-control" 
                    data-bv-notempty="true"
                    data-bv-notempty-message="You need to enter your password." >
                </div>
            </div>
			<div class="form-group">
                <label class="control-label" for="submit-contact-request"></label>
                <div>
                    <button id="login" type="submit" name="login" class="btn btn-info">Login</button>
                </div>
            </div>

		
        <p>
            <a href="#">Forgot Password?</a>
        </p>
        </form>
    </div>
</div>

