<?PHP
    $servername = "localhost";
    $username = "root";
    $password = "cookies";
    $dbname = "scoutDB";
    $table = "v_teams";
    $teams = $_POST["teamNumber1"] . ", " . $_POST["teamNumber2"] . ", " . $_POST["teamNumber3"];   
 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM " . $table . "WHERE teamNumber IN (". $teams .")";
    
    $result = $conn->query($sql);
   
if ($result->num_rows > 0) {
	print "<div class=pretty>";
	while($row = $result->fetch_assoc()) {
		print "<div>";
		print "<p>" . $row["teamNumber"] . ": " . $row["teamName"] . $row["competition"] . "</p>";
		print "<p>" . "Score: " . $row["avg_score"] . " dev " . $row["dev_score"] . "</p>";
		print "<p> Rating: " . $row["avg_rating"] . " dev " . $row["dev_rating"] . "</p>";
		print "<p> Strategy: " . $row["overallStrat"] . "</p>";
		print "<p> <h1>Climbing</h1> </p>";
		print "<p> Do Climb: " . $row["useClimb"] . "</p>";
		print "<p> Climb Percent: " . $row["prop_climbRope"] . "</p>";
		print "<p> Rope head time (actual,claimed): " . $row["avg_headRopeTime"] . "," . $row["claim_headRopeTime"] . "</p>";
		print "<p> Rope grab time (actual,claimed): " . $row["avg_grabRopeTime"] . "," . $row["claim_grabRopeTime"] . "</p>";
		print "	<p> <h1>Gear</h1> </p>";
		print "<p> Do Gears: " . $row["useGear"] . "</p>";
		print "<p> Gears passed: " . $row["avg_gearsPassed"] . " dev " . $row["dev_gearsPassed"] . "</p>";
		print "<p> Percent matches pick up gear: " . $row["prop_pickUp"] . "</p>";
		print "<p> Peg use proportion: lrc: " . $row["prop_leftPeg"] . " " . $row["prop_rightPeg"] . " " . $row["prop_centrePeg"] . "<p>";
		print "<p> Peg claim proportion: lrc: " . $row["claim_leftPeg"] . " " . $row["claim_rightPeg"] . " " . $row["claim_centrePeg"] . "</p>";
		print "<p> <h1>Shooter</h1> </p>";
		print "<p> Do Shooter: " . $row["useShooter"] . "</p>";
		print "<p> Shooter rating: " . $row["avg_shooterRating"] . "</p>";
		print "<p> Claimed balls per sec: " . $row["claim_ballsPerPerson"] . "</p>";
		print "<p> Ball storage: " . $row["claim_ballStorage"] . "</p>";
		print "<p> Need shooter place: " . $row["prop_shooterPlace"] . "</p>";
		print "<p> Shooter place: " . $row["shootingPlace"] . "</p>";
		print "<p><h1>Drive</h1> </p>";
		print "<p> Drive Type: " . $row["driveType"] . "</p>";
		print "<p> Max Speed feet per second: " . $row["maxSpeed"] . "</p>";
		print "<p> Number of Wheels: " . $row["numWheels"] . "</p>";
		print "<p> Has Transmission: " . $row["hasTransmission"] . "</p>";
		print "<p><h1>Autonomous</h1></p>";
		print "<p> Has Auto: " . $row["useAuto"] . "</p>";
		print "<p> Percent cross: " . $row["prop_autoCross"] . "</p>";
		print "<p> Percent gear: " . $row["prop_autoGear"] . "</p>";
		print "<p> Percent hopper: " . $row["prop_autoHopper"] . "</p>";
		print "<p> Claim hopper: " . $row["claim_autoHopper"] . "</p>";
		print "<p> Claim cross: " . $row["claim_autoCross"] . "</p>";
		print "<p> Claim gear: " . $row["claim_autoGear"] . "</p>";
		print "<p> Claim high goal: " . $row["claim_autoHigh"] . "</p>";
		print "<p> Claim low goal: " . $row["claim_autoLow"] . "</p>";
		print "<p> <h1>Strategy And Defence</h1> </p>";
		print "<p> Percent susceptible to defence: " . $row["avg_susceptibleDefence"] . "</p>";
		print "<p> Plan nuclear: " . $row["claim_nuclear"] . "</p>";
		print "<p> Percent use nuclear: " . $row["prop_nuclear"] . "</p>";
		print "<p> Plan defence: " . $row["claim_defence"] . "</p>";
		print "<p> Percent do defence: " . $row["prop_defence"] . "</p>";
		print "<p> <h1>Comments</h1> </p>";
		print "<p> Pit: " . $row["pitComments"] . "</p>";
		print "<p> Match: " . $row["matchComments"] . "</p>";
		print "</div>";				
	}
print "</div>";
} 
    
    $conn->close();
    
    
?>
