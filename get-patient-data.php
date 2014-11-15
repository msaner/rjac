

            <h1><?php echo $row['firstName'] . " " . $row['lastName']; ?></h1>
            <div class="patient-info">
                <table class="detailed-info-table">
                    <tr>
                        <td colspan="4"><h4>Personal</h4></td>
                    </tr>
                    <tr>
                        <td class="info-type">Email</td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                    <tr>
                        <td class="info-type">Phone</td>
                        <td><?php echo $row['phone']; ?></td>
                    </tr>
                    <tr>
                        <td class="info-type">Address</td>
                        <td><?php $row['street'] . " " . $row['city'] . ", " . $row['state'] . " " . $row['zip']; ?></td>
                    </tr>
                    <tr>
                        <td class="info-type">DoB</td>
                        <td><?php $row['dob']; ?></td>
                    </tr>
                </table>
                
                <table class="detailed-info-table">
                    <tr>
                        <td colspan="4"><h4>Symptoms</h4></td>
                    </tr>
                    <tr>
                        <td class="info-type">Symptoms</td>
                        <td colspan="3"><?php $row['symptoms']; ?></td>
                    </tr>
                    <tr>
                        <td class="info-type">Cause</td>
                        <td colspan="3"><?php $row['symptomCauseExplain']; ?></td>
                    </tr>
                    <tr>
                        <td class="info-type">Began</td>
                        <td colspan="3"><?php $row['symptomBegan']; ?></td>
                    </tr>
                </table>
    
                <table class="detailed-info-table">
                    <tr>
                        <td colspan="4"><h4>Pain</h4></td>
                    </tr>
                    <tr>
                        <td class="info-type">Location of Pain</td>
                        <td colspan="3"><?php $row['symptomLocation']; ?></td>
                    </tr>
                    <tr>
                        <td class="info-type">Effected</td>
                        <td colspan="3"><?php $row['percentPresent']; ?><span>% of the day</span></td>
                    </tr>
                    <tr>
                        <td class="info-type">Intensity</td>
                        <td colspan="3"><?php $row['painScale']; ?> <span>out of 10</span></td>
                    </tr>
                    <tr>
                        <td class="info-type">Pain Type</td>
                        <td colspan="3"><?php $row['painType'] . '<br>' . $row['painTypeExplain']; ?></td>
                    </tr>
                    <tr>
                        <td class="info-type">Increased by</td>
                        <td colspan="3"><?php $row['painWorse'] . '<br>' . $row['painWorseExplain']; ?></td>
                    </tr>
                </table>
    
                <table class="detailed-info-table">
                    <tr>
                        <td colspan="4"><h4>Additional Info</h4></td>
                    </tr>
                    <tr>
                        <td class="info-type">Has Been Treated By</td>
                        <td colspan="3"><?php $row['otherDrsExplain']; ?></td>
                    </tr>
                    <tr>
                        <td class="info-type">Current Treatement</td>
                        <td colspan="3"><?php $row['treatmentDone']; ?><br>
						<?php $row['treatmentDoneExplain']; ?></td>
                    </tr>
                </table>
            </div>
      
      