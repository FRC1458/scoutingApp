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
            $crossLine = $row['crossLine'];
            $gearUse = $row['gearUse'];
            $highBallNumber = $row['highBallNumber'];
            $lowBallNumber = $row['lowBallNumber'];
            $highGoal = $row['highGoal'];
            $highBallsShot = $row['highBallsShot'];
            $lowGoal = $row['lowGoal'];
            $lowBallsShot = $row['lowBallsShot'];
            $oppositeLeft = $row['oppositeLeft'];
            $oppositeRight = $row['oppositeRight'];
            $sameSide = $row['sameSide'];
            $noFeeder = $row ['noFeeder'];
            $notFeederRobot = $row['notFeederRobot'];
            $pickUp = $row['pickUp'];
            $gearsLoadedInRobot = $row['gearsLoadedInRobot'];
            $gearsPassedInAirship = $row['gearsPassedInAirship'];
            $leftPeg = $row['leftPeg'];
            $rightPeg = $row['rightPeg'];
            $centerPeg = $row['centerPeg'];
            $climbRope = $row['climbRope'];
            $comments = $row['comments'];
            $competition = $row['competition'];
            $teamScore = $row['teamScore'];
            $reporter = $row['reporterFirstName'] . " " .  $row['reporterLastName'];
        }
        #print "<p> Showing report for reportID: $reportID </p>";
    print "<p> Showing report for Team $teamNumber </p>";
    print "<p> Crossed the line?";
    if ($crossLine === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Using Gears? $gearUse </p>";
    print "<p> Attempted high goal:";
    if ($highGoal === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> High balls attempted: $highBallsShot ";
    print " Scored: $highBallNumber </p>";
    print "<p> Attempted low goal:";
    if ($lowGoal === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Low balls attempted: $lowBallsShot";
    print " Scored: $lowBallNumber </p>";

    if(($oppositeLeft === "1") || ($oppositeRight === "1") || ($sameSide === "1") || ($noFeeder === "1") || ($notFeederRobot === "1"))
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
        if ($notFeederRobot === "1")
        {
            print "Not feeder robot ";
        }
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
    print "<p> Gears loaded into robot? $gearsLoadedInRobot";
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
    print "<p> Able to climb rope?";
    if ($climbRope === "0")
    {
        print " No";
    } else {
        print " Yes";
    }
    print "</p>";
    print "<p> Comments: $comments </p>";
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
    


#get report details from database and display TO DO
?>