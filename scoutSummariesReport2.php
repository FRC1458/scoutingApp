<?PHP
function fa($a)
{
    $r = ""; #tdingy
    foreach ($a as $b) {
        $r = $r . "<td>" . $b . "</td>";
    }
    $r = $r . " </tr>\n"; #more tdingy
    return $r;
}


$servername = "localhost";
$username   = "root";
$password   = "cookies";
$dbname     = "scoutDB";
$table      = "v_teams";
$teams      = $_POST["teamNumber1"] . ", " . $_POST["teamNumber2"] . ", " . $_POST["teamNumber3"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection: " . $conn->connect_error);
}
$sql    = "SELECT * FROM " . $table . " WHERE teamNumber IN (" . $teams . ")";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $teamNumber[]   = $row["teamNumber"];
        $teamName[]     = $row["teamName"];
        $competition[]  = $row["competition"];
        $avgScore[]     = $row["avg_score"];
        $devScore[]     = $row["dev_score"];
        $avgRating[]    = $row["avg_rating"];
        $devRating[]    = $row["dev_rating"];
        $overallStrat[] = $row["overallStrat"];
        
        $doClimb[]        = $row["useClimb"];
        $climbPercent[]   = $row["prop_climbRope"];
        $actualRopeHead[] = $row["avg_headRopeTime"];
        $claimRopeHead[]  = $row["claim_headRopeTime"];
        $actualRopeGrab[] = $row["avg_grabRopeTime"];
        $claimRopeGrab[]  = $row["claim_grabRopeTime"];
        
        $doGears[]        = $row["useGear"];
        $avgGears[]       = $row["avg_gearsPassed"];
        $devGears[]       = $row["dev_gearsPassed"];
        $groundPercent[]  = $row["prop_pickUp"];
        $usePegLeft[]     = $row["prop_leftPeg"];
        $usePegRight[]    = $row["prop_rightPeg"];
        $usePegCentre[]   = $row["prop_centrePeg"];
        $claimPegLeft[]   = $row["claim_leftPeg"];
        $claimPegRight[]  = $row["claim_rightPeg"];
        $claimPegCentre[] = $row["claim_centrePeg"];
        
        $doShooter[]        = $row["useShooter"];
        $shooterRating[]    = $row["avg_shooterRating"];
        $claimBPS[]         = $row["claim_ballsPerSecond"];
        $claimBallStorage[] = $row["claim_ballStorage"];
        $needShootPlace[]   = $row["prop_shooterPlace"];
        $whereShootPlace[]  = $row["shootingPlace"];
        
        $driveType[]       = $row["driveType"];
        $maxSpeed[]        = $row["maxSpeed"];
        $numWheels[]       = $row["numWheels"];
        $hasTransmission[] = $row["hasTransmission"];
        
        $doAuto[]        = $row["useAuto"];
        $percentCross[]  = $row["prop_autoCross"];
        $percentGear[]   = $row["prop_autoGear"];
        $percentdopper[] = $row["prop_autoHopper"];
        $claimCross[]    = $row["claim_autoCross"];
        $claimGear[]     = $row["claim_autoGear"];
        $claimHopper[]   = $row["claim_autoHopper"];
        $claimHigh[]     = $row["claim_autoHigh"];
        $claimLow[]      = $row["claim_autoLow"];
        
        $percentSusceptibleDefence[] = $row["avg_susceptibleDefence"];
        $planNuclear[]               = $row["claim_nuclear"];
        $useNuclear[]                = $row["prop_nuclear"];
        $planDefence[]               = $row["claim_defence"];
        $useDefence[]                = $row["prop_defence"];
        $pitComments[]               = $row["pitComments"];
        $matchComments[]             = $row["matchComments"];
    }
print "<html>
    <link  rel="stylesheet" type="text/css" href="dumpMatchTable.css" />
   <body>";
print "<div class=pretty><table>";
print "<tr><th>Team Number</th>" . "<th>" . $teamNumber[0] . "</th>". "<th>" . $teamNumber[1] . "</th>". "<th>" . $teamNumber[2] . "</th></tr>\n";
print "<tr><td>Team Name</td>" . fa($teamName);
print "<tr><td>Competition</td>" . fa($competition);
print "<tr><td>Avg Score</td>" . fa($avgScore);
print "<tr><td>Dev Score</td>" . fa($devScore);
print "<tr><td>Avg Rating</td>" . fa($avgRating);
print "<tr><td>Dev Rating</td>" . fa($devRating);
print "<tr><td>Strategy</td>" . fa($overallStrat);

print "<tr><td>Do Climb</td>" . fa($doClimb);
print "<tr><td>Percent Climb</td>" . fa($climbPercent);
print "<tr><td>Avg Head Time</td>" . fa($actualRopeHead);
print "<tr><td>Claim Head Time</td>" . fa($claimRopeHead);
print "<tr><td>Avg Grab Time</td>" . fa($actualRopeGrab);
print "<tr><td>Claim Grab Time</td>" . fa($claimRopeGrab);

print "<tr><td>Do Gears</td>" . fa($doGears);
print "<tr><td>Avg Gears</td>" . fa($avgGears);
print "<tr><td>Dev Gears</td>" . fa($devGears);
print "<tr><td>Percent Ground</td>" . fa($groundPercent);
print "<tr><td>Plan r</td>" . fa($claimPegRight);
print "<tr><td>Plan l</td>" . fa($claimPegLeft);
print "<tr><td>Plan c</td>" . fa($claimPegCentre);
print "<tr><td>Actual r</td>" . fa($usePegRight);
print "<tr><td>Actual l</td>" . fa($usePegLeft);
print "<tr><td>Actual c</td>" . fa($usePegCentre);

print "<tr><td>Do Shooter</td>" . fa($doShooter);
print "<tr><td>Shooting Rating</td>" . fa($shooterRating);
print "<tr><td>Balls Per Second</td>" . fa($claimBPS);
print "<tr><td>Ball Storage</td>" . fa($claimBallStorage);
print "<tr><td>Prop Specific Place</td>" . fa($needShootPlace);
print "<tr><td>Shooting Place</td>" . fa($whereShootPlace);

print "<tr><td>Drive Type</td>" . fa($driveType);
print "<tr><td>Max Speed</td>" . fa($maxSpeed);
print "<tr><td>Num Wheels</td>" . fa($numWheels);
print "<tr><td>Has Transmission</td>" . fa($hasTransmission);

print "<tr><td>Do Auto</td>" . fa($doAuto);
print "<tr><td>Percent Cross</td>" . fa($percentCross);
print "<tr><td>Percent Gear</td>" . fa($percentGear);
print "<tr><td>Percent Hopper</td>" . fa($percentHopper);
print "<tr><td>Claim Cross</td>" . fa($claimCross);
print "<tr><td>Claim Gear</td>" . fa($claimGear);
print "<tr><td>Claim Hopper</td>" . fa($claimHopper);
print "<tr><td>Claim High</td>" . fa($claimHigh);
print "<tr><td>Claim Low</td>" . fa($claimLow);

print "<tr><td>Percent Defence</td>" . fa($percentSusceptibleDefence);
print "<tr><td>Plan Nuclear</td>" . fa($planNuclear);
print "<tr><td>Prop Nuclear</td>" . fa($useNuclear);
print "<tr><td>Plan Defence</td>" . fa($planDefence);
print "<tr><td>Prop Defence</td>" . fa($useDefence);
print "<tr><td>Pit Comments</td>" . fa($pitComments);
print "<tr><td>Match Comments</td>" . fa($matchComments);

print "</table></div></body></html>";
} else {
	print "Failed to get results";
}




$conn->close();


?>
