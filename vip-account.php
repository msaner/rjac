<?php
session_start();
if(!isset($_SESSION['email'])){
header("location:vip.php");
die;
}
?>

<?php include "global/header.php"; ?>
	<script type="text/javascript">
		function noCheck() {
			if (document.getElementById('symptom-cause-1').checked) {
				document.getElementById('ifNo').style.display = 'none';
			}
				else document.getElementById('ifNo').style.display = 'block';
			}
	</script>

<!-- page body -->
<main>
<div class="current-user">
        	<p><strong>Logged in as,</strong> <?php print $_SESSION['email']; ?><br>
            	<a class="sub-text" href="logout.php">logout</a>
            </p>
        </div>
	<div id="account-details-intro">
        <h1>Account Details</h1>
        
        <p>Use the Quick Chart below to update your medical record. This will save you time and cut down on paper that you need to keep track of. The information entered below will be used during your appointment. Don't worry if you forget something, we'll go through this form with you in our office to make sure everything is accurate.</p>
        <p>Check back often to keep your chart updated and keep an eye out for new features and special VIP Club deals.</p>
	</div>
	
    <!-- SECTION 1 -->            
    <div class="content-container">
        <h2>Quick Chart</h2>
        <form id='quick-chart' name="quickChart" action="update-details.php" method="post" >
            
    <!-- 1.1 -->
        <div class="blue-boxes">
            <img src="images/icons/numbered-steps-sm-1.jpg" alt="quick chart section one icon" class="img-float-left"> <h3>Your Symptoms</h3>
            
            <div class="form-group chart-col1">
            	<p>What symptoms are you experiencing?</p>
              	<div>
                	<textarea placeholder="Please Explain" class="form-control" id="symptoms" name="symptoms" 
                    data-bv-notempty="true"
                    data-bv-notempty-message="Please list your symptoms." ></textarea>
            	</div>
            </div>
	<!-- 1.2 -->            
			<div class="chart-col2">
				<p class="p-last">Do you know what caused the symptoms?</p>
				<div>
                    <div class="radio inline-inputs prm">
                        <label for="symptom-cause-0">
                            <input type="radio" data-toggle="radio" name="symptomCause" id="symptom-cause-0" value="yes" data-radiocheck-toggle="radio" checked="checked" onclick="javascript:noCheck();" />
                            Yes
                        </label>
                    </div>
                    <div class="radio inline-inputs prm">
                        <label for="symptom-cause-1">
                            <input type="radio" data-toggle="radio" name="symptomCause" id="symptom-cause-1" value="no" data-radiocheck-toggle="radio" onclick="javascript:noCheck();" />
                        	No
                        </label>
                    </div>
            	</div>
                <div class="form-group"  style="display:block;" id="ifNo">
                    <label class="control-label" for="symptom-cause-explain"></label>
                    <div>
                        <textarea placeholder="Please Explain" class="form-control" id="symptom-cause-explain" name="symptomCauseExplain" 
                            data-bv-notempty="true"
                            data-bv-notempty-message="Required if answering 'yes'"
                        ></textarea>
                    </div>
                </div>
			</div> 
	<!-- 1.3 -->            
			<div class="chart-col3">
				<p class="p-last">My symptoms began:</p>
               	<div class="form-group">
					<div class="radio inline-inputs prm">
                        <label for="symptom-began-0">
                            <input type="radio" data-toggle="radio" name="symptomBegan" id="symptom-began-0" value="suddenly" data-radiocheck-toggle="radio" checked="checked" />
                            Suddenly
                        </label>
                    </div>
                    <div class="radio inline-inputs prm">
                        <label for="symptom-began-1">
                            <input type="radio" data-toggle="radio" name="symptomBegan" id="symptom-began-1" value="gradually" data-radiocheck-toggle="radio" />
                        	Gradually
                        </label>
                    </div>
                </div>
            </div>
        </div>
     
	<!-- SECTION 2 -->       
        <div class="content-container">
			<div class="blue-boxes">
                <img src="images/icons/numbered-steps-sm-2.jpg" alt="quick chart section two icon" class="img-float-left"> <h3>Your Pain</h3>
	<!-- 2.1 -->            
				<div class="chart-col1">
					<p>Use the diagram to mark where the symptoms are present.</p>
                    <div id="pain-location-chart">
                        <!-- decoding the checkbox id's r, l, f, b, first initial of sides of the body: right, left, front, back respectively. -->
						<div class="form-group">
							<div>
								<label class="checkbox" id="rf-shoulder" for="symptom-location-0">
                                <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-0" value="rf-shoulder"
                                    data-bv-choice="true"
                                    data-bv-choice-min="1"
                                    data-bv-choice-message="Please check at least one." >
                                </label>
                            
                                <label class="checkbox" id="lf-shoulder" for="symptom-location-1">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-1" value="lf-shoulder">
                                </label>
                            
                                <label class="checkbox" id="r-elbow" for="symptom-location-2">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-2" value="r-elbow">
                                </label>
                            
                                <label class="checkbox" id="l-elbow" for="symptom-location-3">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-3" value="l-elbow">
                                </label>
                            
                                <label class="checkbox" id="r-wrist" for="symptom-location-4">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-4" value="r-wrist">
                                </label>
                            
                                <label class="checkbox" id="l-wrist" for="symptom-location-5">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-5" value="l-wrist">
                                </label>
                            
                                <label class="checkbox" id="f-chest" for="symptom-location-6">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-6" value="f-chest">
                                </label>
                            
                                <label class="checkbox" id="f-hip" for="symptom-location-7">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-7" value="f-hip">
                                </label>
                            
                                <label class="checkbox" id="rf-knee" for="symptom-location-8">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-8" value="rf-knee">
                                </label>
                            
                                <label class="checkbox" id="lf-knee" for="symptom-location-9">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-9" value="lf-knee">
                                </label>
                            
                                <label class="checkbox" id="l-ankle" for="symptom-location-10">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-10" value="l-ankle">
                                </label>
                            
                                <label class="checkbox" id="r-ankle" for="symptom-location-11">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-11" value="r-ankle">
                                </label>
                            
                                <label class="checkbox" id="rb-shoulder" for="symptom-location-12">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-12" value="rb-shoulder">
                                </label>
                            
                                <label class="checkbox" id="lb-shoulder" for="symptom-location-13">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-13" value="lb-shoulder">
                                </label>
                            
                                <label class="checkbox" id="b-upper" for="symptom-location-14">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-14" value="b-upper">
                                </label>
                            
                                <label class="checkbox" id="b-lower" for="symptom-location-15">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-15" value="b-lower">
                                </label>
                            
                                <label class="checkbox" id="rb-knee" for="symptom-location-16">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-16" value="rb-knee">
                                </label>
                             
                                <label class="checkbox" id="lb-knee" for="symptom-location-17">
                                  <input type="checkbox" name="symptomLocation[]" data-toggle="checkbox" id="symptom-location-17" value="lb-knee">
                                </label>
							</div>
						</div>
					</div>
				</div>
	<!-- 2.2 -->            
                <div class="chart-col2">
					<p class="p-last">The pain is best described as:<br>
                        <span class="sub-text">(check all that apply)</span>
                    </p>
                    
                    <div class="form-group col-span-checkbox">
                        <label class="checkbox" for="pain-type-0">
                          <input type="checkbox" name="painType[]" data-toggle="checkbox" id="pain-type-0" value="sharp"
                          	data-bv-choice="true"
                            data-bv-choice-min="1"
                            data-bv-choice-message="Please check at least one." >
                          Sharp
                        </label>

                        <label class="checkbox" for="pain-type-1">
                          <input type="checkbox" name="painType[]" data-toggle="checkbox" id="pain-type-1" value="tingling">
                          Tingling
                        </label>

                        <label class="checkbox" for="pain-type-2">
                          <input type="checkbox" name="painType[]" data-toggle="checkbox" id="pain-type-2" value="throbing">
                          Throbbing
                        </label>

                        <label class="checkbox" for="pain-type-3">
                          <input type="checkbox" name="painType[]" data-toggle="checkbox" id="pain-type-3" value="stabbing">
                          Stabbing
                        </label>

                        <label class="checkbox" for="pain-type-4">
                          <input type="checkbox" name="painType[]" data-toggle="checkbox" id="pain-type-4" value="dull">
                          Dull
                        </label>

                        <label class="checkbox" for="pain-type-5">
                          <input type="checkbox" name="painType[]" data-toggle="checkbox" id="pain-type-5" value="burning">
                          Burning
                        </label>

                        <label class="checkbox" for="pain-type-6">
                          <input type="checkbox" name="painType[]" data-toggle="checkbox" id="pain-type-6" value="other" onclick="javascript:explain1();">
                          Other
                        </label>
                	</div>
					<script type="text/javascript">
						function explain1() {
							if (document.getElementById('pain-type-6').checked) {
								document.getElementById('explain1').style.display = 'block';
							}
								else document.getElementById('explain1').style.display = 'none';
							}
					</script>
					<div class="form-group"  style="display:none;" id="explain1">
						<label class="control-label" for="pain-type-explain"></label>
						<div>
							<textarea placeholder="Please Explain" class="form-control" id="pain-type-explain" name="painTypeExplain" ></textarea>
						</div>
					</div>
                
                    <!-- SLIDER -->
                    <div class="form-group">    
                        <p>What percentage of the day are your symptoms present?</p>

                        <script type="text/javascript">						
                            $(function() {
								$( "#slider" ).slider({
								  range: "min",
								  min: 1,
								  max: 5,
								  value: 0
								});
								
							});
                        </script>
                        <!-- DO NOT put anything inside the slider div, it will break the element -->
                        <div id="slider"></div>
                        <div class="slider-text-values sub-text"><span>0%</span> <span>25%</span> <span>50%</span> <span>75%</span> <span>100%</span></div>
                    </div>    
				</div>
	<!-- 2.3 -->            
                <div class="chart-col3">
					<!-- SLIDER -->
                    <div class="form-group">    
                        <p>How intense is the pain you are experiencing?</p>
						<script type="text/javascript">						
                            $(function() {
								$( "#slider-range-max" ).slider({
								  range: "min",
								  min: 1,
								  max: 10,
								  value: 0,							  
								});
							});
                        </script>

                        <!-- DO NOT put anything inside the slider div, it will break the element -->
<div id="slider-range-max"></div>
                        <div class="slider1-text-values sub-text"><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span>
                        	<span>6</span><span>7</span><span>8</span><span>9</span><span>10</span></div>
                            <input name="painScale" type="text" id="hidden1" style="display:none;"/>
                    </div>    
                    
                    <p>The problem is increased by:</p>
                    
					<div class="form-group">
                        <label class="checkbox" for="pain-worse-0">
                          <input type="checkbox" name="painWorse[]" data-toggle="checkbox" id="pain-worse-0" value="sitting"
                          	data-bv-choice="true"
                            data-bv-choice-min="1"
                            data-bv-choice-message="Please check at least one." >
                          Sitting
                        </label>

                        <label class="checkbox" for="pain-worse-1">
                          <input type="checkbox" name="painWorse[]" data-toggle="checkbox" id="pain-worse-1" value="sneezing">
                          Sneezing
                        </label>

                        <label class="checkbox" for="pain-worse-2">
                          <input type="checkbox" name="painWorse[]" data-toggle="checkbox" id="pain-worse-2" value="coughing">
                          Coughing
                        </label>

                        <label class="checkbox" for="pain-worse-3">
                          <input type="checkbox" name="painWorse[]" data-toggle="checkbox" id="pain-worse-3" value="straining">
                          Straining
                        </label>

                        <label class="checkbox" for="pain-worse-4">
                          <input type="checkbox" name="painWorse[]" data-toggle="checkbox" id="pain-worse-4" value="standing">
                          Standing
                        </label>

                        <label class="checkbox" for="pain-worse-5">
                          <input type="checkbox" name="painWorse[]" data-toggle="checkbox" id="pain-worse-5" value="other" onclick="javascript:explain2();" >
                          Other
                        </label>
                	</div>
					<script type="text/javascript">
						function explain2() {
							if (document.getElementById('pain-worse-5').checked) {
								document.getElementById('explain2').style.display = 'block';
							}
								else document.getElementById('explain2').style.display = 'none';
							}
					</script>
					<div class="form-group"  style="display:none;" id="explain2">
						<label class="control-label" for="pain-worse-explain"></label>
						<div>
							<textarea placeholder="Please Explain" class="form-control" id="pain-worse-explain" name="painWorseExplain" ></textarea>
						</div>
					</div>

                </div>
			</div><!-- section 2 blue-boxes -->
        </div><!-- section 2 content-container -->
    
	<!-- SECTION THREE -->        
        <div class="blue-boxes step3">
	<!-- 3.1 -->            
            <div class="chart-col1">
                <img src="images/icons/numbered-steps-sm-3.jpg" alt="quick chart section three icon" class="img-float-left"> <h3>Additional Info</h3>
                <p>Have you seen any other medical professional about these symptoms?</p>
				<script type="text/javascript">
                    function noCheck2() {
                        if (document.getElementById('other-drs-1').checked) {
                            document.getElementById('ifNo2').style.display = 'none';
                        }
                            else document.getElementById('ifNo2').style.display = 'block';
                        }
                </script>
    				<div class="form-group">
                        <div class="radio inline-inputs prm">
                            <label for="other-drs-0">
                                <input type="radio" data-toggle="radio" name="otherDrs" id="other-drs-0" value="yes" data-radiocheck-toggle="radio" checked="checked" onclick="javascript:noCheck2();" />
                                Yes
                            </label>
                        </div>
                        <div class="radio inline-inputs prm">
                            <label for="other-drs-1">
                                <input type="radio" data-toggle="radio" name="otherDrs" id="other-drs-1" value="no" data-radiocheck-toggle="radio" onclick="javascript:noCheck2();" />
                                No
                            </label>
                        </div>
                    </div>
                    <div class="form-group"  style="display:block;" id="ifNo2">
                        <label class="control-label" for="other-drs-explain"></label>
                        <div>
                            <textarea placeholder="Please Explain" class="form-control" id="other-drs-explain" name="otherDrsExplain" 
                                data-bv-notempty="true"
                                data-bv-notempty-message="Required if answering 'yes'"
                            ></textarea>
                        </div>
                    </div>
            </div>
	<!-- 3.2 -->            
            <div class="chart-col2">
                <p class="p-last">What have you done for treatment?<br>
                    <span class="sub-text">(check all that apply)</span>
                </p>
                <div class="form-group col-span-checkbox">
                    <label class="checkbox" for="treatment-done-0">
                      <input type="checkbox" name="treatmentDone[]" data-toggle="checkbox" id="treatment-done-0" value="rest" >
                      Rest
                    </label>
                    <label class="checkbox" for="treatment-done-1">
                      <input type="checkbox" name="treatmentDone[]" data-toggle="checkbox" id="treatment-done-1" value="heat">
                      Heat
                    </label>
                    <label class="checkbox" for="treatment-done-2">
                      <input type="checkbox" name="treatmentDone[]" data-toggle="checkbox" id="treatment-done-2" value="stretching">
                      Stretching
                    </label>
                    <label class="checkbox" for="treatment-done-3">
                      <input type="checkbox" name="treatmentDone[]" data-toggle="checkbox" id="treatment-done-3" value="ice">
                      Ice
                    </label>
                    <label class="checkbox" for="treatment-done-4">
                      <input type="checkbox" name="treatmentDone[]" data-toggle="checkbox" id="treatment-done-4" value="other" onclick="javascript:explain3();">
                      Other
                    </label>
                    <label class="checkbox" for="treatment-done-5">
                      <input type="checkbox" name="treatmentDone[]" data-toggle="checkbox" id="treatment-done-5" value="medicaiton">
                      Medication
                    </label>
                    <label class="checkbox col-md-4" for="treatment-done-6">
                      <input type="checkbox" name="treatmentDone[]" data-toggle="checkbox" id="treatment-done-6" value="physicalTherapy">
                      Physical Therapy
                    </label>
				</div>  
				<script type="text/javascript">
                    function explain3() {
                        if (document.getElementById('treatment-done-4').checked) {
                            document.getElementById('explain3').style.display = 'block';
                        }
                            else document.getElementById('explain3').style.display = 'none';
                        }
                </script>
                <div class="form-group"  style="display:none;" id="explain3">
                    <label class="control-label" for="treatment-done-explain"></label>
                    <div>
                        <textarea placeholder="Please Explain" class="form-control" id="treatment-done-explain" name="treatmentDoneExplain" ></textarea>
                    </div>
              	</div>
                <div style="display:none;">
                <input type="text" name="email" id="email" style="display:none;" value="<?php echo $_SESSION['email']; ?>" placeholder="<?php echo $_SESSION['email']; ?>">
                </div>
            </div>
	<!-- 3.3 -->            
            <div class="chart-col3">	
                <img src="images/icons/numbered-steps-sm-4.jpg" alt="quick chart section four icon" class="img-float-left"> <h3>Save &amp; Update</h3>
                <p>All information you provide will remain strictly confidential and will never be sold, rented or otherwise distributed to a third party, unless you give written consent or in cases where we are required by law to release information.</p>
                <button type="submit" class="btn btn-info">Update</button>
            </div>
            
        </div>
        </form>
    </div>
</main>
<script>
	$(document).ready(function() {
		$('#contactRequest').bootstrapValidator();
	});
</script>

<?php include "global/footer.php"; ?>