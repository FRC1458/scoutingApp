<?PHP
    $servername = "localhost";
    $username = "root";
    $password = "cookies";
    $dbname = "scoutDB";
    $table = "v_teams";
    $teams = $_POST["teamNumber1"] . ", " . $_POST["teamNumber2"] . ", " . $_POST["teamNumber3"];
#log_errors;
#display_errors;
 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM " . $table . " WHERE teamNumber IN (". $teams .")";
 
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
	print "<div class=pretty>";
	while($row = $result->fetch_assoc()) {
		print "<div><table><td>";
		
		print "<th>" . $row["teamNumber"] . ": " . $row["teamName"] . $row["competition"] . "</th>";
		
		print "<tr> <td>" . "Score: " . $row["avg_score"] . "</td> dev <td>" . $row["dev_score"] . "</td></tr>";
		
		print "<tr> <td>Rating: " . $row["avg_rating"] . "</td> dev <td>" . $row["dev_rating"] . "</td></tr>";
		
		print "<tr> <td>Strategy: </td><td>" . $row["overallStrat"] . "</td></tr>";
		
		#print "<th> <h1>Climbing</h1> </th>";
		
		print "<tr> <td>Do Climb: </td><td>" . $row["useClimb"] . "</td></tr>";
		
		print "<tr> Climb Percent: " . $row["prop_climbRope"] . "</tr>";
		
		print "<tr> <td>Rope head time (actual,claimed): </td><td>" . $row["avg_headRopeTime"] . "</td><td>" . $row["claim_headRopeTime"] . "</td></tr>";
		
		print "<tr> <td>Rope grab time (actual,claimed): </td><td>" . $row["avg_grabRopeTime"] . "</td><td>" . $row["claim_grabRopeTime"] . "</td></tr>";
		
		#print "	<th> <h1>Gear</h1> </th>";
		
		print "<tr><td> Do Gears: </td><td>" . $row["useGear"] . "</td></tr>";
		
		print "<tr> <td>Gears passed: </td><td>" . $row["avg_gearsPassed"] . "</td> dev <td>" . $row["dev_gearsPassed"] . "</td></tr>";
		
		print "<tr> <td>Percent matches pick up gear: </td><td>" . $row["prop_pickUp"] . "</td></tr>";
		
		print "<tr><td> Peg use proportion: lrc: </td><td>" . $row["prop_leftPeg"] . "</td><td> " . $row["prop_rightPeg"] . "</td><td> " . $row["prop_centrePeg"] . "</td><tr>";
		
		print "<tr> <td>Peg claim proportion: lrc: </td><td>" . $row["claim_leftPeg"] . "</td><td> " . $row["claim_rightPeg"] . " </td><td>" . $row["claim_centrePeg"] . "</td></tr>";
		
		#print "<th> <h1>Shooter</h1> </th>";
		
		print "<tr><td> Do Shooter: </td><td>" . $row["useShooter"] . "</td></tr>";
		
		print "<tr> <td>Shooter rating: </td><td>" . $row["avg_shooterRating"] . "</td></tr>";
		
		print "<tr> <td>Claimed balls per sec: </td><td>" . $row["claim_ballsPerPerson"] . "</td></tr>";
		
		print "<tr> <td>Ball storage:</td><td> " . $row["claim_ballStorage"] . "</td></tr>";
		
		print "<tr> <td>Need shooter place:</td><td> " . $row["prop_shooterPlace"] . "</td></tr>";
		
		print "<tr> <td>Shooter place: </td><td>" . $row["shootingPlace"] . "</td></tr>";
		
		#print "<th><h1>Drive</h1> </th>";
		
		print "<tr> <td>Drive Type: </td><td>" . $row["driveType"] . "</td></tr>";
		
		print "<tr><td> Max Speed feet per second: </td><td>" . $row["maxSpeed"] . "</td></tr>";
		
		print "<tr> <td>Number of Wheels: </td><td>" . $row["numWheels"] . "</td></tr>";
		
		print "<tr><td> Has Transmission:</td><td> " . $row["hasTransmission"] . "</td></tr>";
		
		#print "<th><h1>Autonomous</h1></th>";
		
		print "<tr> <td>Has Auto: </td><td>" . $row["useAuto"] . "</td></tr>";
		
		print "<tr> <td>Percent cross: </td><td>" . $row["prop_autoCross"] . "</td></tr>";
		
		print "<tr> <td>Percent gear: </td><td>" . $row["prop_autoGear"] . "</td></tr>";
		
		print "<tr> <td>Percent hopper: </td><td>" . $row["prop_autoHopper"] . "</td></tr>";
		
		print "<tr> <td>Claim hopper: </td><td>" . $row["claim_autoHopper"] . "</td></tr>";
		
		print "<tr><td> Claim cross: </td><td>" . $row["claim_autoCross"] . "</td></tr>";
		
		print "<tr> <td>Claim gear: </td><td>" . $row["claim_autoGear"] . "</td></tr>";
		
		print "<tr> <td>Claim high goal: </td><td>" . $row["claim_autoHigh"] . "</td></tr>";
		
		print "<tr> <td>Claim low goal: </td><td>" . $row["claim_autoLow"] . "</td></tr>";
		
		#print "<th> <h1>Strategy And Defence</h1> </th>";
		
		print "<tr> <td>Percent susceptible to defence: </td><td>" . $row["avg_susceptibleDefence"] . "</td></tr>";
		
		print "<tr> <td>Plan nuclear: </td><td>" . $row["claim_nuclear"] . "</td></tr>";
		
		print "<tr> <td>Percent use nuclear: </td><td>" . $row["prop_nuclear"] . "</td></tr>";
		
		print "<tr> <td>Plan defence: </td><td>" . $row["claim_defence"] . "</td></tr>";
		
		print "<tr> <td>Percent do defence: </td><td>" . $row["prop_defence"] . "</td></tr>";
		
		#print "<th> <h1>Comments</h1> </th>";
		
		print "<tr> <td>Pit: </td><td>" . $row["pitComments"] . "</td></tr>";
		
		print "<tr> <td>Match: </td><td>" . $row["matchComments"] . "</td></tr>";
		
		print "</div></table></td>";				
	}
	
print "</div>";
} 


    
    $conn->close();
    
    
?>
