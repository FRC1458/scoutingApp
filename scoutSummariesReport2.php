<?PHP
   function fa($a) {
	$r = "";#thingy
	foreach ($a as $b) {
		$r = $r . "<tb>" . $b . "</tb>";
	}
	$r = $r . "";#more thingy
	return $r;
   }


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
    print $conn;
    $result = $conn->query($sql);
   #print $result;
if ($result->num_rows > 0) {
	print "<div class=pretty>";
	while($row = $result->fetch_assoc()) {
		$teamNumber[] = $row["teamNumber"];
		$teamName[] = $row["teamName"];
		$competition[] = $row["competition"];
		$avgScore[] = $row["avg_score"];
		$devScore[] = $row["dev_score"];
		$avgRating[] = $row["avg_rating"];
		$devRating[] = $row["dev_rating"];
		$overallStrat[] = $row["overallStrat"];

		$doClimb[] = $row["useClimb"];
		$climbPercent[] = $row["prop_climbRope"];
		$actualRopeHead[] = $row["avg_headRopeTime"];
		$claimRopeHead[] = $row["claim_headRopeTime"];
		$actualRopeGrab[] = $row["avg_grabRopeTime"];
		$claimRopeGrab[] = $row["claim_grabRopeTime"];

		$doGears[] = $row["useGear"];
		$avgGears[] = $row["avg_gearsPassed"];
		$devGears[] = $row["dev_gearsPassed"];
		$groundPercent[] = $row["prop_pickUp"];
		$usePegLeft[] = $row["prop_leftPeg"];
		$usePegRight[] = $row["prop_rightPeg"];
		$usePegCentre[] = $row["prop_centrePeg"];
		$claimPegLeft[] = $row["claim_leftPeg"];
		$claimPegRight[] = $row["claim_rightPeg"];
		$claimPegCentre[] = $row["claim_centrePeg"];
		
		$doShooter[] = $row["useShooter"];
		$shooterRating[] = $row["avg_shooterRating"];
		$claimBPS[] = $row["claim_ballsPerSecond"];
		$claimBallStorage[] = $row["claim_ballStorage"];
		$needShootPlace[] = $row["prop_shooterPlace"];
		$whereShootPlace[] = $row["shootingPlace"];

		$driveType[] = $row["driveType"];
		$maxSpeed[] = $row["maxSpeed"];
		$numWheels[] = $row["maxSpeed"];
		$hasTransmission[] = $row["hasTransmission"];
		
		$doAuto[] = $row["useAuto"];
		$percentCross[] = $row["prop_autoCross"];
		$percentGear[] = $row["prop_autoGear"];
		$percentHopper[] = $row["prop_autoHopper"];
		$claimCross[] = $row["claim_autoCross"];
		$claimGear[] = $row["claim_autoGear"];
		$claimHopper[] = $row["claim_autoHopper"];
		$claimHigh[] = $row["claim_autoHigh"];
		$claimLow[] = $row["claim_autoLow"];

		$percentSusceptibleDefence[] = $row["avg_susceptibleDefence"];
		$planNuclear[] = $row["claim_nuclear"];
		$useNuclear[] = $row["prop_nuclear"];
		$planDefence[] = $row["claim_defence"];
		$useDefence[] = $row["prop_defence"];
		$pitComments[] = $row["pitComments"];
		$matchComments[] = $row["matchComments"];
		
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
