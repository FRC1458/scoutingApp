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
            $gearLeft = $row['gearRight'];
            $gearRight = $row['gearRight'];
            $gearMiddlePeg = $row['gearMiddlePeg'];
            $gearNone = $row['gearNone'];
            $notAGearRobot = $row['notAGearRobot'];
            $capableOfRope = $row['capableOfRope'];
            $otherComments = $row['comments'];
            $competition1 = $row['competition1'];
            $competition2 = $row['competition2'];
            $competition3 = $row['competition3'];
            $reporter = $row['reporterFirstName'] . " " .  $row['reporterLastName'];
        }
        print "<p> Showing report for Team $teamNumber </p>";
        print "<p> Team name: $teamName </p>";
        print "<p> Max speed: $maxSpeed </p>";
        print "<p> Operating speed: $operatingSpeed </p>";
        print "<p> Drive name: $driveName </p>";
        print "<p> Autonomous?";
        if ($autonomous === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        print "<p> Autonomous description: $autonomousDesc </p>";
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
        if ($none === "1")
        {
            print "No feeder ";
        }
        if ($notFeederRobot === "1")
        {
            print "Not feeder robot ";
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
        print "<p> Max balls : $maxBalls </p>";
        print "<p> Capable of gears: ";
        if ($capableOfGears === "0")
        {
            print " No";
        } else {
            print " Yes";
        }
        print "</p>";
        if(($gearLeft === "1") || ($gearRight === "1") || ($gearMiddlePeg === "1") || ($gearNone === "1") || ($notAGearRobot === "1"))
    {
        print "<p> Gear preference: ";
        if ($gearLeft === "1")
        {
            print "Left gear";
        }
        if ($gearRight === "1")
        {
            print "Right gear ";
        }
        if ($gearMiddlePeg === "1")
        {
            print "Middle peg gear";
        }
        if ($gearNone === "1")
        {
            print "No gear";
        }
        if ($notAGearRobot === "1")
        {
            print "Not a gear robot ";
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