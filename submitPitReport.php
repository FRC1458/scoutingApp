<?PHP
    
    $teamNumber = $_POST['teamNumber'];
    $teamName = $_POST['teamName'];
    $maxSpeed = $_POST['maxSpeed'];
    $transmission = $_POST['transmission'];
    $wheelNumber = $_POST['wheelNumber'];
    $driveType = $_POST['driveType'];
    $driveDescription = $_POST['driveDescription'];
    $shooterStrategy = $_POST['shooterStrategy'];
    $gearStrategy = $_POST['gearStrategy'];
    $defenseStrategy = $_POST['defenseStrategy'];
    $nuclearStrategy = $_POST ['nuclearStrategy'];
    $howToWin = $_POST['howToWin'];
    $autonomous = $_POST['autonomous'];
    $autonomousGear = $_POST['autonomousGear'];
    $autonomousHighGoal = $_POST['autonomousHighGoal'];
    $autonomousLowGoal = $_POST['autonomousLowGoal'];
    $autonomousHopper = $_POST['autonomousHopper'];
    $autonomousCrossLine = $_POST['autonomousCrossLine'];
    $feederPreferenceList = $_POST['feederPreference'];
    $highGoal = $_POST['highGoal'];
    $lowGoal = $_POST['lowGoal'];
    $ballsPerSecond = $_POST['ballsPerSecond'];
    $maxBalls = $_POST['maxBalls'];
    $capableOfGears = $_POST['capableOfGears'];
    $gearPreferenceList = $_POST['gearPreference'];
    $capableOfRope = $_POST['capableOfRope'];
    $attachTime = $_POST['attachTime'];
    $climbTime = $_POST['climbTime'];
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
    $sql = "INSERT INTO $pitTable (teamNumber, teamName, maxSpeed, transmission, wheelNumber, driveType,
    driveDescription, shooterStrategy, gearStrategy, defenseStrategy, nuclearStrategy,
    howToWin, autonomous, autonomousGear, autonomousHighGoal, autonomousLowGoal, autonomousHopper,
    autonomousCrossLine, oppositeRight, oppositeLeft, sameSide,
    none, highGoal, lowGoal, ballsPerSecond, maxBalls, capableOfGears, gearLeft,
    gearRight, gearMiddlePeg, gearNone, capableOfRope, attachTime, climbTime, otherComments,
    competition1, competition2, competition3, reporterFirstName, reporterLastName)
    VALUES ( '$teamNumber', '$teamName', '$maxSpeed', $transmission, '$wheelNumber', '$driveType',
    '$driveDescription', $shooterStrategy, $gearStrategy, $defenseStrategy, $nuclearStrategy,
    '$howToWin', $autonomous, $autonomousGear, $autonomousHighGoal, $autonomousLowGoal,
    $autonomousHopper, $autonomousCrossLine, $oppositeRight, $oppositeLeft, $sameSide,
    $none, $highGoal, $lowGoal, '$ballsPerSecond', '$maxBalls', $capableOfGears, $gearLeft, $gearRight,
    $gearMiddlePeg, $gearNone, $capableOfRope, '$attachTime', '$climbTime', '$otherComments',
    $competition1, $competition2, $competition3, '$reporterFirstName', '$reporterLastName')";
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
    print "<p> Transmission? $transmission </p>";
    print "<p> Wheel number: $wheelNumber </p>";
    print "<p> Drive type? $driveType </p>";
    print "<p> Drive description: $driveDescription </p>";
    print "<p> Shooter strategy? $shooterStrategy </p>";
    print "<p> Gear strategy? $gearStrategy </p>";
    print "<p> Defense strategy? $defenseStrategy </p>";
    print "<p> Nuclear option with regards to hoppers? $nuclearStrategy </p>";
    print "<p> Explain strategy. How do you plan to win? $howToWin </p>";
    print "<p> Autonomous: $autonomous </p>";
    print "<p> Capable of gears in autonomous? $autonomousGear </p>";
    print "<p> Capable of high goal in autonomous? $autonomousHighGoal </p>";
    print "<p> Capable of low goal in autonomous? $autonomousLowGoal </p>";
    print "<p> Capable of hopper in autonomous? $autonomousHopper </p>";
    print "<p> Going to cross line in autonomous? $autonomousCrossLine </p>";
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
    print "<p> Balls per second? $ballsPerSecond </p>";
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
    print "<p> Time that it took to attach? $attachTime </p>";
    print "<p> Time that it took to climb? $climbTime </p>";
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
