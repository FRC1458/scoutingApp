<?PHP
   function fa($a) {
	$r = "";#tdingy
	foreach ($a as $b) {
		$r = $r . "<tb>" . $b . "</tb> ";
	}
	$r = $r . " </tr>";#more tdingy
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
		$numWheels[] = $row["numWheels"];
		$hasTransmission[] = $row["hasTransmission"];
		
		$doAuto[] = $row["useAuto"];
		$percentCross[] = $row["prop_autoCross"];
		$percentGear[] = $row["prop_autoGear"];
		$percentdopper[] = $row["prop_autoHopper"];
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
	}
	print "<div class=pretty><table>";
	print "<tr>";
print "<td>Team Number</td>
print "<td>Team Name</td>
print "<td>Competition</td>
print "<td>Avg Score</td>
print "<td>Dev Score</td>
print "<td>Avg Rating</td>
print "<td>Dev Rating</td>
print "<td>Strategy</td>

print "<td>Do Climb</td>
print "<td>Percent Climb</td>
print "<td>Avg Head Time</td>
print "<td>Claim Head Time</td>
print "<td>Avg Grab Time</td>
print "<td>Claim Grab Time</td>

print "<td>Do Gears</td>
print "<td>Avg Gears</td>
print "<td>Dev Gears</td>
print "<td>Percent Ground</td>
print "<td>Plan r/l/c</td>
print "<td>Actual r/l/c</td>

print "<td>Do Shooter</td>
print "<td>Shooting Rating</td>
print "<td>Balls Per Second</td>
print "<td>Ball Storage</td>
print "<td>Prop Specific Place</td>
print "<td>Shooting Place</td>

print "<td>Drive Type</td>
print "<td>Max Speed</td>
print "<td>Num Wheels</td>
print "<td>Has Transmission</td>

print "<td>Do Auto</td>
print "<td>Percent Cross</td>
print "<td>Percent Gear</td>
print "<td>Percent Hopper</td>
print "<td>Claim Cross</td>
print "<td>Claim Gear</td>
print "<td>Claim Hopper</td>
print "<td>Claim High</td>
print "<td>Claim Low</td>

print "<td>Percent Defence</td>
print "<td>Plan Nuclear</td>
print "<td>Prop Nuclear</td>
print "<td>Plan Defence</td>
print "<td>Prop Defence</td>
print "<td>Pit Comments</td>
print "<td>Match Comments</td>

print "</table></div>";
} 
    
    $conn->close();
    
    
?>
