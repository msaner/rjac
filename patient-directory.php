<?php
session_start();

if(!isset($_SESSION['username'])){
	header("location:emp-checklogin.php");
	die;
}

$username="teamsaner"; 
$password="st!THecr3@hAB2xu";

$db = new PDO('mysql:host=teamsaner.db.10540327.hostedresource.com;dbname=teamsaner', $username, $password);

//$sql = "SELECT * FROM patients";

//$sql = "SELECT patients.*, patient_details.email FROM patients LEFT JOIN patient_details on patients.email=patient_details.email";
$sql = "SELECT * FROM patients LEFT JOIN patient_details on patients.email = patient_details.email";
?>

<?php include "global/emp-header.php"; ?>

	<!-- page body -->
    <main class="employee-portal">
    <div class="current-user">
        	<p><strong>Logged in as,</strong> <?php print $_SESSION['username']; ?><br>
            	<a class="sub-text" href="logout.php">logout</a>
            </p>
        </div>

    	<div class="half-left">
            <h1>Patient Directory</h1>
            <div class="input-group search">
                <input type="text" class="form-control" placeholder="Search" id="search-query-3">
                <span class="input-group-btn">
                    <button type="submit" class="btn"><span class="fui-search"></span></button>
                </span>
            </div>
            <div class="patient-info">
	            <div class="patient-info-row">
						<div id="patient-name"><strong>Patient Name</strong></div>
						<div id="patient-id"><strong>ID</strong></div>
						<div id="patient-phone"><strong>Phone Number</strong></div>
				</div>
				<?php 
                foreach ($db->query($sql) as $row) {
                    echo '<div class="patient-info-row" id="'. $row['id'] .'">';
						echo '<div id="patient-name">' . $row['firstName'] . " " . $row['lastName'] . '</div>';
						echo '<div id="patient-id">' . $row['id'] . '</div>';
						echo '<div id="patient-phone">' . $row['phone'] . '</div>';
						
						echo '<div id="view-details"><a id="' . $row['email'] . '" href="teamsaner.com/rjac/get-patient-data.php?id=' . $row['email'] . '" class="get-details">View Details</a></div>';
						
						echo '<div id="delete"><a id="' . $row['id'] . '" href="'.$row['id'].'" span class="fui-cross"></a></div>';
					echo '</div>';	
                }
                ?>
            </div>
        </div>
        
        <script>		
		$('.get-details').on('click', function(e) {
			
			e.preventDefault();
			
    		var patientId = $(this).attr('id');alert(patientId);
    		$.ajax({
        		url: 'get-patient-data.php?id='+patientId
    		}).done(function(response) {
				
		        $("#patient-data").html(response);
    		}); 
		});
		</script>   
        
        <div class="half-right" id="patient-data"></div>
    </main>

<?php include "global/emp-footer.php"; ?>
