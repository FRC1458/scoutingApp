<?PHP
    $servername = "localhost";
    $username = "esha";
    $password = "esha1234";
    $dbname = "scoutDB";
    $table = "v_teams";
    $teams = $_POST["teamNumber1"] . ", " . $_POST["teamNumber2"] . ", " . $_POST["teamNumber3"];   
 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM " . $table . "WHERE teamNumber in (" . $teams . ")";
    
    $result = $conn->query($sql);
   
if ($result->num_rows > 0) {
	echo "<div class=pretty>";
	while($row = $result->fetch_assoc()) {
	echo "<div>";
	echo $row["teamNumber"] . ": " . $row["teamName"] . $row["competition"] . "<br />";
	echo "Score: " . $row["avg_score"] . " dev " . $row["dev_score"];
	echo "Rating: " . $row["avg_rating"] . " dev " . $row["dev_rating"];
	echo "Strategy: " . $row["overallStrat"];
	echo "<h1> Climbing </h1>";
	echo "Do Climb: " . $row["useClimb"];
	echo "Climb Percent: " . $row["prop_climbRope"];
	echo "Rope head time (actual,claimed): " . $row["avg_headRopeTime"] . "," . $row["claim_headRopeTime"];
	echo "Rope grab time (actual,claimed): " . $row["avg_grabRopeTime"] . "," . $row["claim_grabRopeTime"];
	echo "<h1>Gear</h1>";
	echo "Do Gears: " . $row["useGear"];
	echo "Gears passed: " . $row["avg_gearsPassed"] . " dev " . $row["dev_gearsPassed"];
	echo "Percent matches pick up gear: " . $row["prop_pickUp"];
	echo "Peg use proportion: lrc: " . $row["prop_leftPeg"] . " " . $row["prop_rightPeg"] . " " . $row["prop_centrePeg"];
	echo "Peg claim proportion: lrc: " . $row["claim_leftPeg"] . " " . $row["claim_rightPeg"] . " " . $row["claim_centrePeg"];
	echo "<h1>Shooter</h1>";
	echo "Do Shooter: " . $row["useShooter"];
	echo "Shooter rating: " . $row["avg_shooterRating"];
	echo "Claimed balls per sec: " . $row["claim_ballsPerPerson"];
	echo "Ball storage: " . $row["claim_ballStorage"];
	echo "Need shooter place: " . $row["prop_shooterPlace"];
	echo "Shooter place: " . $row["shootingPlace"];
	echo "<h1>Drive</h1>";
	echo "Drive Type: " . $row["driveType"];
	echo "Max Speed feet per second: " . $row["maxSpeed"];
	echo "Number of Wheels: " . $row["numWheels"];
	echo "Has Transmission: " . $row["hasTransmission"];
	echo "<h1>Autonomous</h1>";
	echo "Has Auto: " . $row["useAuto"];
	echo "Percent cross: " . $row["prop_autoCross"];
	echo "Percent gear: " . $row["prop_autoGear"];
	echo "Percent hopper: " . $row["prop_autoHopper"];
	echo "Claim hopper: " . $row["claim_autoHopper"];
	echo "Claim cross: " . $row["claim_autoCross"];
	echo "Claim gear: " . $row["claim_autoGear"];
	echo "Claim high goal: " . $row["claim_autoHigh"];
	echo "Claim low goal: " . $row["claim_autoLow"];
	echo "<h1>Strategy And Defence</h1>";
	echo "Percent susceptible to defence: " . $row["avg_susceptibleDefence"];
	echo "Plan nuclear: " . $row["claim_nuclear"];
	echo "Percent use nuclear: " . $row["prop_nuclear"];
	echo "Plan defence: " . $row["claim_defence"];
	echo "Percent do defence: " . $row["prop_defence"];
	echo "<h1>Comments</h1>";
	echo "Pit: " . $row["pitComments"];
	echo "Match: " . $row["matchComments"];
	echo "</div>";				
	}
echo "</div>";
} 
    
    $conn->close();
    
    
?>
