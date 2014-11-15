<?php include "global/emp-header.php"; ?>

	<!-- page body -->
    <main>
		<div class="staff-login">
			<h1>Staff Login</h1>
			<div class="blue-boxes">
                <form method="post" action="emp-checklogin.php"
                    data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                    data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                    data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
                    enctype="multipart/form-data" >
                	<div class="form-group">
                		<div>    
                            <input type="text" placeholder="Username" name="username" class="form-control" value="" 
                                data-bv-notempty="true" 
                                data-bv-notempty-message="A username is required." >
                        </div>
                    </div>
                    
                    <div class="form-group">
                		<div>    
                			<input type="password" placeholder="Password" name="password" class="form-control" value=""
                    			data-bv-notempty="true" 
                        		data-bv-notempty-message="A password is required." >
                        </div>
                    </div>
                    
                    <div class="form-group">
                		<label class="control-label" for="submit-contact-request"></label>
                		<div>
                    		<button id="emp-login" type="submit" name="login" class="btn btn-info">Login</button>
                		</div>
            		</div>
            	</form>
        		<p><a href="#">Forgot Password?</a></p>
        	</div>
    	</div>        
    </main>

<?php include "global/emp-footer.php"; ?>

