<?PHP
    
    $teamNumber = $_POST['teamNumber'];
    $teamName = $_POST['teamName'];
    $maxSpeed = $_POST['maxSpeed'];
    $operatingSpeed = $_POST['operatingSpeed'];
    $driveName = $_POST['driveName'];
    $autonomous = $_POST['autonomous'];
    $autonomousDesc = $_POST['autonomousDesc'];
    $feederPreferenceList = $_POST['feederPreference'];
    $highGoal = $_POST['highGoal'];
    $lowGoal = $_POST['lowGoal'];
    $maxBalls = $_POST['maxBalls'];
    $capableOfGears = $_POST['capableOfGears'];
    $gearPreferenceList = $_POST['gearPreference'];
    $capableOfRope = $_POST['capableOfRope'];
    $otherComments = $_POST['otherComments'];
    $competitionList = $_POST['competition'];
    
    $reporterFirstName = $_COOKIE['reporterFirstName'];
    $reporterLastName = $_COOKIE['reporterLastName'];
    if ($reporterFirstName === "") {
        header("Location: noFirstName.html");
        die();
    }
    if ($reporterLastName === "") {
        header("Location: noLastName.html");
        die();
    }
    
    $servername = "localhost";
    $username = "esha";
    $password = "esha1234";
    $dbname = "scoutDB";
    
    $pitTable = "pitreporttable";
    
    $oppositeRight = "False";
    $oppositeLeft = "False";
    $sameSide = "False";
    $none = "False";
    $notFeederRobot = "False";
    
    $gearLeft = "False";
    $gearRight = "False";
    $gearMiddlePeg = "False";
    $gearNone = "False";
    $notAGearRobot = "False";
    
    $competition1 = "False";
    $competition2 = "False";
    $competition3 = "False";
    
    if(!empty($feederPreferenceList))
    {
        foreach($feederPreferenceList as $tempmp)
        {
            if($tempmp === "Opposite right") {
                $oppositeRight = "True";
            }
            if($tempmp === "Opposite left") {
                $oppositeLeft = "True";
            }
            if($tempmp === "Same side") {
                $sameSide = "True";
            }
            if($tempmp === "No feeder") {
                $none = "True";
            }
            if($tempmp === "Not a feeder robot") {
                $notFeederRobot = "True";
            }
        }
    }
    
    if(!empty($gearPreferenceList))
    {
        foreach($gearPreferenceList as $tempmp)
        {
            if($tempmp === "Left") {
                $gearLeft = "True";
            }
            if($tempmp === "Right") {
                $gearRight = "True";
            }
            if($tempmp === "Middle Peg") {
                $gearMiddlePeg = "True";
            }
            if($tempmp === "None") {
                $gearNone = "True";
            }
            if($tempmp === "Not a gear robot") {
                $notAGearRobot = "True";
            }
        }
    }
    
    if(!empty($competitionList))
    {
        foreach($competitionList as $tempmp)
        {
            if($tempmp === "Competition 1") {
                $competition1 = "True";
            }
            if($tempmp === "Competition 2") {
                $competition2 = "True";
            }
            if($tempmp === "Competition 3") {
                $competition3 = "True";
            }
        }
    }
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection: " . $conn->connect_error);
    }
    $sql = "INSERT INTO $pitTable (teamNumber, teamName, maxSpeed, operatingSpeed,
    driveName, autonomous, autonomousDesc, oppositeRight, oppositeLeft, sameSide,
    none, notFeederRobot, highGoal, lowGoal, maxBalls, capableOfGears, gearLeft,
    gearRight, gearMiddlePeg, gearNone, notAGearRobot, capableOfRope, comments,
    competition1, competition2, competition3, reporterFirstName, reporterLastName)
    VALUES ( '$teamNumber', '$teamName', '$maxSpeed', 
    '$operatingSpeed', '$driveName', $autonomous, '$autonomousDesc', $oppositeRight, $oppositeLeft, $sameSide,
    $none, $notFeederRobot, $highGoal, $lowGoal, '$maxBalls', $capableOfGears, $gearLeft, $gearRight,
    $gearMiddlePeg, $gearNone, $notAGearRobot, $capableOfRope, '$otherComments', $competition1, $competition2,
    $competition3, '$reporterFirstName', '$reporterLastName')";
   
   /* $sql = "INSERT INTO " . $pitTable . " (teamNumber, teamName, maxSpeed, operatingSpeed,
    driveName, autonomous, autonomousDesc, oppositeRight, oppositeLeft, sameSide,
    none, notFeederRobot, highGoal, lowGoal, maxBalls, capableOfGears, gearLeft,
    gearRight, gearMiddlePeg, gearNone, notAGearRobot, capableOfRope, comments,
    competition1, competition2, competition3, reporter) VALUES (" . $teamNumber . ", " . $teamName . ", " . $maxSpeed .
    ", " . $operatingSpeed . ", " . $driveName . ", " . $autonomous . ", " . $autonomousDesc .
    ", " . $oppositeRight . ", " . $oppositeLeft . ", " . $sameSide . ", " . $none .
    ", " . $notFeederRobot . ", " . $highGoal . ", " . $lowGoal . ", " .
    $maxBalls . ", " . $capableOfGears . ", " . $gearLeft . ", " . $gearRight .
    ", " . $gearMiddlePeg . ", " . $gearNone . ", " . $notAGearRobot . ", " .
    $capableOfRope . ", " . $otherComments . ", " . $competition1 . ", " . $competition2 . ", " .
    $competition3 . ", " . $scoutersInitials . ")";
    */
   
    # print "<p> $sql </p>";
    
    $result = $conn->query($sql);
    
    if ($result === TRUE) {
        echo "Following report added to database:";
           print "<p> Team Name: $teamNumber </p>";
    print "<p> Max Speed: $maxSpeed </p>";
    print "<p> Operating Speed: $operatingSpeed </p>";
    print "<p> Drive: $driveName </p>";
    print "<p> Autonomous: $autonomous </p>";
    print "<p> Description (if yes): $autonomousDesc </p>";
    if(!empty($feederPreferenceList))
    {
        print "<p> Feeder preference: </p>";
        print "<ul>";
        foreach($feederPreferenceList as $tempmp)
        {
            print "<li>";
            print $tempmp;
        }
        print "</ul>";
    }
    print "<p> Capable of high goal? $highGoal </p>";
    print "<p> Capable of low goal? $lowGoal </p>";
    print "<p> Max number of balls held? $maxBalls </p>";
    print "<p> Capable of high goal? $capableOfGears </p>";
    if(!empty($gearPreferenceList))
    {
        print "<p> Gear preference: </p>";
        print "<ul>";
        foreach($gearPreferenceList as $tempmp)
        {
            print "<li>";
            print $tempmp;
        }
        print "</ul>";
    }
    print "<p> Capable of using rope? $capableOfRope </p>";
    print "<p> Any other comments? $otherComments </p>";
    if(!empty($competitionList))
    {
        print "<p> Competition list: </p>";
        print "<ul>";
        foreach($competitionList as $tempmp)
        {
            print "<li>";
            print $tempmp;
        }
        print "</ul>";
    }
    print "<p> Reporter: " . $reporterFirstName . " " . $reporterLastName . " </p>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
     
?>
