<?PHP
$reportID = $_GET['reportID'];
print "<p> Showing report for reportID: $reportID </p>";
$servername = "localhost";
$username = "esha";
$password = "esha1234";
$dbname = "scoutDB";
$table = "pitreporttable";
$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM " . $table . " Where reportID = " . $reportID;
    
    $result = $conn->query($sql);
    
    if ($result -> num_rows > 0) {
         
        while($row = $result -> fetch_assoc()) {
             /*   
            $teamNumber = $row['teamNumber'];
            $teamName = $row['teamName'];
            $maxSpeed = $row['maxSpeed'];
            $operatingSpeed = $row['operatingSpeed'];
            $driveName = $row['driveName'];
            $autonomous = $row['autonomous'];
            $autonomousDesc = $row['autonomousDesc'];
            $oppositeLeft = $row['oppositeLeft'];
            $oppositeRight = $row['oppositeRight'];
            $sameSide = $row['sameSide'];
            $none = $row ['none'];
            $notFeederRobot = $row['notFeederRobot'];
            $highGoal = $row['highGoal'];
            $lowGoal = $row['lowGoal'];
            $maxBalls = $row['maxBalls'];
            $capableOfGears = $row['capableOfGears'];
            $gearLeft = $row['gearLeft'];
            $gearRight = $row['gearRight'];
            $gearMiddlePeg = $row['gearMiddlePeg'];
            $gearNone = $row['gearNone'];
            $notAGearRobot = $row['notAGearRobot'];
            $capableOfRope = $row['capableOfRope'];
            $otherComments = $row['comments'];
            $competition1 = $row['competition1'];
            $competition2 = $row['competition2'];
            $competition3 = $row['competition3'];
            */
            $teamNumber = $row['teamNumber'];
            $teamName = $row['teamName'];
            $maxSpeed = $row['maxSpeed'];
            $transmission = $row['transmission'];
            $wheelNumber = $row['wheelNumber'];
            $driveType = $row['driveType'];
            $driveDescription = $row['driveDescription'];
            $shooterStrategy = $row['shooterStrategy'];
            $gearStrategy = $row['gearStrategy'];
            $defenseStrategy = $row['defenseStrategy'];
            $nuclearStrategy = $row ['nuclearStrategy'];
            $howToWin = $row['howToWin'];
            $autonomous = $row['autonomous'];
            $autonomousGear = $row['autonomousGear'];
            $autonomousHighGoal = $row['autonomousHighGoal'];
            $autonomousLowGoal = $row['autonomousLowGoal'];
            $autonomousHopper = $row['autonomousHopper'];
            $autonomousCrossLine = $row['autonomousCrossLine'];
            $oppositeRight = $row['oppositeRight'];
            $oppositeLeft = $row['oppositeLeft'];
            $sameSide = $row['sameSide'];
            $none = $row ['none'];
            $highGoal = $row['highGoal'];
            $lowGoal = $row['lowGoal'];
            $ballsPerSecond = $row['ballsPerSecond'];
            $maxBalls = $row['maxBalls'];
            $capableOfGears = $row['capableOfGears'];
            $gearLeft = $row['gearLeft'];
            $gearRight = $row['gearRight'];
            $gearMiddlePeg = $row['gearMiddlePeg'];
            $gearNone = $row['gearNone'];
            $capableOfRope = $row['capableOfRope'];
            $attachTime = $row['attachTime'];
            $climbTime = $row['climbTime'];
            $otherComments = $row['otherComments'];
            $competition1 = $row['competition1'];
            $competition2 = $row['competition2'];
            $competition3 = $row['competition3'];
            $reporter = $row['reporterFirstName'] . " " .  $row['reporterLastName'];
        }
        print "<p> Showing report for Team $teamNumber </p>";
        print "<p> Team name: $teamName </p>";
        print "<p> Max speed: $maxSpeed </p>";
        print "<p> Transmission?";
        if ($transmission === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Wheel number: $wheelNumber </p>";
        print "<p> Drive type: $driveType </p>";
        print "<p> Drive description: $driveDescription </p>";
        print "<p> Shooter strategy?";
        if ($shooterStrategy === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Gear strategy?";
        if ($gearStrategy === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Defense strategy?";
        if ($defenseStrategy === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Nuclear strategy?";
        if ($nuclearStrategy === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> How team intends to win: $howToWin </p>";
        print "<p> Autonomous?";
        if ($autonomous === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Capable of gear in autonomous?";
        if ($autonomousGear === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Capable of high goal in autonomous?";
        if ($autonomousHighGoal=== "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Capable of low goal in autonomous?";
        if ($autonomousLowGoal === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Hopper in autonomous?";
        if ($autonomousHopper === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Crossing line in autonomous?";
        if ($autonomousCrossLine === "0")
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
        if ($none === "1")
        {
            print "No feeder ";
        }
    }
        print "</p>";
        print "<p> High goal: ";
        if ($highGoal === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> High goal: ";
        if ($lowGoal === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Balls per second: $ballsPerSecond </p>";
        print "<p> Max balls : $maxBalls </p>";
        print "<p> Capable of gears: ";
        if ($capableOfGears === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        if(($gearLeft === "1") || ($gearRight === "1") || ($gearMiddlePeg === "1") || ($gearNone === "1"))
    {
        print "<p> Gear preference: ";
        if ($gearLeft === "1")
        {
            print "Left gear ";
        }
        if ($gearRight === "1")
        {
            print "Right gear ";
        }
        if ($gearMiddlePeg === "1")
        {
            print "Middle peg gear ";
        }
        if ($gearNone === "1")
        {
            print "No gear ";
        }
        
    }
        print "</p>";
        print "<p> Capable of rope? ";
        if ($capableOfRope === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Attach time: $attachTime </p>";
        print "<p> Climb time: $climbTime </p>";
        print "<p> Comments: $otherComments </p>";
        print "<p> Competition: ";
        
        if (($competition1 === "1") || ($competition2 === "1") || ($competition3 === "1"))
        {
            print "<p> Competitions: ";
            if ($competition1 === "1")
            {
                print "San Francisco Regional ";
            }
            if ($competition2 === "1")
            {
                print "Sacramento Regional ";
            }
            if ($competition3 === "1")
            {
                print "Competition 3";
            }
        }
    }
        print "<p> Reporter: $reporter </p>";
        $conn->close();  
            
?>