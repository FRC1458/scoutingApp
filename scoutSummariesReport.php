<?PHP
    $servername = "localhost";
    $username = "root";
    $password = "cookies";
    $dbname = "scoutDB";
    $table = "v_teams";
    $teams = $_POST["teamNumber1"] . ", " . $_POST["teamNumber2"] . ", " . $_POST["teamNumber3"];
	$counter = 0; 
#log_errors;
#display_errors;
 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM " . $table . " WHERE teamNumber IN (". $teams .")";
 
    $result = $conn->query($sql);

#<style>
#th {
#    background-color: black;
#    color: red;
#}
#
#tr {
#    background-color: red;
#    color: black;
#}
#
#table {
#    border: solid;
#}
#</style>
?>
<html>
    <link  rel="stylesheet" type="text/css" href="matchScoutingReportPage.css" />
   <body>
	   <?PHP
if ($result->num_rows > 0) {
	print "<div class=pretty id = \"container\" style = \"width:100%\">";
	while($row = $result->fetch_assoc()) {
		if($counter == 0 ){
			print "<div align = \"left\" id = \"left\" style = \"float:left;width = 25%;position:relative\"><table><td>";
		}
		else if($counter = 1){
			print "<div align = \"center\" id = \"center\" style = \"float:left;width = 25%;position:relative\"><table><td>";
		}else if ($counter = 2){
			print "<div align = \"right\" id = \"right\" style = \"float:left;width = 25%;position:relative\"><table><td>";
			
		}
		print $counter; 
		
		print "<th>" . $row["teamNumber"] . ": " . $row["teamName"] . $row["competition"] . "<td></td><td></td></th>";
		
		print "<tr> <td>" . "Score: " . $row["avg_score"] . "</td> dev <td>" . $row["dev_score"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Rating: " . $row["avg_rating"] . "</td> dev <td>" . $row["dev_rating"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Strategy: </td><td>" . $row["overallStrat"] . "</td><td></td><td></td></tr>";
		
		#print "<th> <h1>Climbing</h1> </th>";
		
		print "<tr> <td>Do Climb: </td><td>" . $row["useClimb"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Climb Percent: </td><td>" . $row["prop_climbRope"] . "</td></td><td></td><td></td></tr>";
		
		print "<tr> <td>Rope head time (actual,claimed): </td><td>" . $row["avg_headRopeTime"] . "</td><td>" . $row["claim_headRopeTime"] . "</td><td></td></tr>";
		
		print "<tr> <td>Rope grab time (actual,claimed): </td><td>" . $row["avg_grabRopeTime"] . "</td><td>" . $row["claim_grabRopeTime"] . "</td><td></td></tr>";
		
		#print "	<th> <h1>Gear</h1> </th>";
		
		print "<tr><td> Do Gears: </td><td>" . $row["useGear"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Gears passed: </td><td>" . $row["avg_gearsPassed"] . "</td> dev <td>" . $row["dev_gearsPassed"] . "</td><td></td></tr>";
		
		print "<tr> <td>Percent matches pick up gear: </td><td>" . $row["prop_pickUp"] . "</td><td></td><td></td></tr>";
		
		print "<tr><td> Peg use proportion: lrc: </td><td>" . $row["prop_leftPeg"] . "</td><td> " . $row["prop_rightPeg"] . "</td><td> " . $row["prop_centrePeg"] . "</td><tr>";
		
		print "<tr> <td>Peg claim proportion: lrc: </td><td>" . $row["claim_leftPeg"] . "</td><td> " . $row["claim_rightPeg"] . " </td><td>" . $row["claim_centrePeg"] . "</td></tr>";
		
		#print "<th> <h1>Shooter</h1> </th>";
		
		print "<tr><td> Do Shooter: </td><td>" . $row["useShooter"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Shooter rating: </td><td>" . $row["avg_shooterRating"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Claimed balls per sec: </td><td>" . $row["claim_ballsPerPerson"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Ball storage:</td><td> " . $row["claim_ballStorage"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Need shooter place:</td><td> " . $row["prop_shooterPlace"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Shooter place: </td><td>" . $row["shootingPlace"] . "</td><td></td><td></td></tr>";
		
		#print "<th><h1>Drive</h1> </th>";
		
		print "<tr> <td>Drive Type: </td><td>" . $row["driveType"] . "</td><td></td><td></td></tr>";
		
		print "<tr><td> Max Speed feet per second: </td><td>" . $row["maxSpeed"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Number of Wheels: </td><td>" . $row["numWheels"] . "</td><td></td><td></td></tr>";
		
		print "<tr><td> Has Transmission:</td><td> " . $row["hasTransmission"] . "</td><td></td><td></td></tr>";
		
		#print "<th><h1>Autonomous</h1></th>";
		
		print "<tr> <td>Has Auto: </td><td>" . $row["useAuto"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Percent cross: </td><td>" . $row["prop_autoCross"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Percent gear: </td><td>" . $row["prop_autoGear"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Percent hopper: </td><td>" . $row["prop_autoHopper"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Claim hopper: </td><td>" . $row["claim_autoHopper"] . "</td><td></td><td></td></tr>";
		
		print "<tr><td> Claim cross: </td><td>" . $row["claim_autoCross"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Claim gear: </td><td>" . $row["claim_autoGear"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Claim high goal: </td><td>" . $row["claim_autoHigh"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Claim low goal: </td><td>" . $row["claim_autoLow"] . "</td><td></td><td></td></tr>";
		
		#print "<th> <h1>Strategy And Defence</h1> </th>";
		
		print "<tr> <td>Percent susceptible to defence: </td><td>" . $row["avg_susceptibleDefence"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Plan nuclear: </td><td>" . $row["claim_nuclear"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Percent use nuclear: </td><td>" . $row["prop_nuclear"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Plan defence: </td><td>" . $row["claim_defence"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Percent do defence: </td><td>" . $row["prop_defence"] . "</td><td></td><td></td></tr>";
		
		#print "<tr><th> <h1>Comments</h1> </th></tr>";
		
		print "<tr> <td>Pit: </td><td>" . $row["pitComments"] . "</td><td></td><td></td></tr>";
		
		print "<tr> <td>Match: </td><td>" . $row["matchComments"] . "</td><td></td><td></td></tr>";
		
		print "</div></table></td>";	
		$counter++; 
	}
	
print "</div>";
} 


    
    $conn->close();
    
    
?>
 </body>

</html>
