<?PHP
$reportID = $_GET['reportID'];
$servername = "localhost";
$username = "esha";
$password = "esha1234";
$dbname = "scoutDB";
$table = "matchreporttable";
$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM " . $table . " Where reportID = " . $reportID;
    
    $result = $conn->query($sql);
    
    if ($result -> num_rows > 0) {
         
        while($row = $result -> fetch_assoc()) {
            $teamNumber = $row['teamNumber'];
            $driveStation = $row['driveStation'];
            $autoHopper = $row['autoHopper'];
            $crossLine = $row['crossLine'];
            $gearUse = $row['gearUse'];
            $shooterRating = $row['shooterRating'];
            $engageHopper = $row['engageHopper'];
            $shootingPlace = $row['shootingPlace'];
            $whereShootingPlace = $row['whereShootingPlace'];
            $susceptibleDefense = $row['susceptibleDefense'];
            $highGoal = $row['highGoal'];
            $lowGoal = $row['lowGoal'];
            $oppositeLeft = $row['oppositeLeft'];
            $oppositeRight = $row['oppositeRight'];
            $sameSide = $row['sameSide'];
            $noFeeder = $row['noFeeder'];
            $pickUp = $row['pickUp'];
            $nuclear = $row['nuclear'];
            $teleopHopper = $row['teleopHopper'];
            $gearsPassedInAirship = $row['gearsPassedInAirship'];
            $leftPeg = $row['leftPeg'];
            $rightPeg = $row['rightPeg'];
            $centerPeg = $row['centerPeg'];
            $headingToRopeTime = $row['headingToRopeTime'];
            $timeToGrab = $row['timeToGrab'];
            $timeToClimb = $row['timeToClimb'];
            $lightOn = $row['lightOn'];
            $climbRope = $row['climbRope'];
            $comments = $row['comments'];
            $robotDefense = $row['robotDefense'];
            $robotRating = $row['robotRating'];
            $competition = $row['competition'];
            $teamScore = $row['teamScore'];
            $reporter = $row['reporterFirstName'] . " " .  $row['reporterLastName'];
        }
        #print "<p> Showing report for reportID: $reportID </p>";
    print "<p> Showing report for Team $teamNumber </p>";
    print "<p> What drive station did the robot come from? $driveStation </p>";
    print "<p> Autonomous hopper?";
    if ($autoHopper === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Crossed the line?";
    if ($crossLine === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Using Gears? $gearUse </p>";
    print "<p> Shooter rating: $shooterRating </p>";
    print "<p> Engaged hopper:";
    if ($engageHopper === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Had to shoot from a specific place?";
    if ($shootingPlace === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> If so, where? $whereShootingPlace </p>";
    print "<p> Susceptible to defense?";
    if ($susceptibleDefense === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Attempted high goal:";
    if ($highGoal === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Attempted low goal:";
    if ($lowGoal === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    if(($oppositeLeft === "1") || ($oppositeRight === "1") || ($sameSide === "1") || ($noFeeder === "1"))
    {
        print "<p> Feeder preference: ";
        if ($oppositeLeft === "1")
        {
            print "Opposite left ";
        }
        if ($oppositeRight === "1")
        {
            print "Opposite right ";
        }
        if ($sameSide === "1")
        {
            print "Same side ";
        }
        if ($noFeeder === "1")
        {
            print "No feeder ";
        }
    }
    print "</p>";

    if(($oppositeLeft === "1") || ($oppositeRight === "1") || ($sameSide === "1") || ($noFeeder === "1"))
    {
        print "<p> Feeder preference: ";
        if ($oppositeLeft === "1")
        {
            print "Opposite left ";
        }
        if ($oppositeRight === "1")
        {
            print "Opposite right ";
        }
        if ($sameSide === "1")
        {
            print "Same side ";
        }
        if ($noFeeder === "1")
        {
            print "No feeder ";
        
        print "</p>";
    }
    print "<p> Capable of picking up balls?";
    if ($pickUp === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Nuclear option?";
    if ($nuclear === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Teleop hopper?";
    if ($teleopHopper === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Gears passed into airship? $gearsPassedInAirship </p>";
    
    if(($leftPeg === "1") or ($rightPeg === "1") or ($centerPeg === "1"))
    {
        print "<p> Gear preference: ";
        if ($leftPeg === "1")
        {
            print "Left peg ";
        }
        if ($rightPeg === "1")
        {
            print "Right peg ";
        }
        if ($centerPeg === "1")
        {
            print "Center peg ";
        }
        print "</p>";
    }
    print "<p> When did it head to the rope (seconds)? $headingToRopeTime </p>";
    print "<p> Time to grab rope (seconds)? $timeToGrab </p>";
    print "<p> Time to climb rope (seconds)? $timeToClimb </p>";
    print "<p> Did the light stay on past T=0? $lightOn </p>";
    print "<p> Able to climb rope?";
    if ($climbRope === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";

    print "<p> Comments: $comments </p>";
    
    print "<p> Does the robot play defense?";
    if ($robotDefense === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Robot rating: $robotRating </p>";
    print "<p> Team score: $teamScore </p>";
   
    if ($competition === "Competition 1")
    {
        print "San Fransisco Regional";
    } else if ($competition === "Competition 2") {
        print "Sacramento Regional";
    } else {
        print "Competition 3";
    }
        print "</p>";
    } else {
        echo "0 results";
    }
    print "<p> Reporter: $reporter </p>";
    $conn->close();
    }


#get report details from database and display TO DO
?>