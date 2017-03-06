<?PHP
    $teamNumber = $_POST['teamNumber'];
    $crossLine = $_POST['crossLine'];
    $gearUse = $_POST['gearUse'];
    $highBallNumber = $_POST['highBallNumber'];
    $lowBallNumber = $_POST['lowBallNumber'];
    $highGoal = $_POST['highGoal'];
    $highBallsShot = $_POST['highBallsShot'];
    $lowGoal = $_POST['lowGoal'];
    $lowBallsShot = $_POST['lowBallsShot'];
    $feederPreferenceList = $_POST['feederPreference'];
    $pickUp = $_POST['pickUp'];
    $gearsLoadedInRobot = $_POST['gearsLoadedInRobot'];
    $gearsPassedInAirship = $_POST['gearsPassedInAirship'];
    $gearPegPreferenceList = $_POST['gearPegPreference'];
    $climbRope = $_POST['climbRope'];
    $comments = $_POST['comments'];
    $competition = $_POST['competition'];
    $teamScore = $_POST['teamScore'];
    
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
    
    $matchTable = "matchreporttable";
    
    $oppositeLeft = "False";
    $oppositeRight = "False";
    $sameSide = "False";
    $noFeeder = "False";
    $notFeederRobot = "False";
    
    $leftPeg = "False";
    $rightPeg = "False";
    $centerPeg = "False";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection: " . $conn->connect_error);
    }
    
    if(!empty($feederPreferenceList))
    {
        foreach($feederPreferenceList as $tempmp)
        {
            if($tempmp === "Opposite Left") {
                $oppositeLeft = "True";
            }
            if($tempmp === "Opposite Right") {
                $oppositeRight = "True";
            }
            if($tempmp === "Same Side") {
                $sameSide = "True";
            }
            if($tempmp === "No Feeder") {
                $noFeeder = "True";
            }
            if($tempmp === "Not A Feeder Robot") {
                $notFeederRobot = "True";
            }
        }
    }
    
    if(!empty($gearPegPreferenceList))
    {
        foreach($gearPegPreferenceList as $tempmp)
        {
            if($tempmp === "Left peg") {
                $leftPeg = "True";
            }
            if($tempmp === "Right peg") {
                $rightPeg = "True";
            }
            if($tempmp === "Center peg") {
                $centerPeg = "True";
            }
        }
    }
    $sql = "INSERT INTO $matchTable (teamNumber, crossLine, gearUse, highBallNumber, lowBallNumber,
    highGoal, highBallsShot, lowGoal, lowBallsShot, oppositeLeft, oppositeRight,
    sameSide, noFeeder, notFeederRobot, pickUp, gearsLoadedInRobot, gearsPassedInAirship, 
    leftPeg, rightPeg, centerPeg, climbRope, comments, competition, teamScore, reporterFirstName, 
    reporterLastName)
    VALUES ('$teamNumber', $crossLine, '$gearUse', '$highBallNumber', '$lowBallNumber', $highGoal, '$highBallsShot',
    $lowGoal, $lowBallsShot, $oppositeLeft, $oppositeRight, $sameSide, $noFeeder,
    $notFeederRobot, $pickUp, '$gearsLoadedInRobot', '$gearsPassedInAirship', $leftPeg,
    $rightPeg, $centerPeg, $climbRope, '$comments', '$competition', '$teamScore', '$reporterFirstName',
    '$reporterLastName')";
    
    $result = $conn->query($sql);
    
    if ($result === TRUE) {
        echo "Following report added to database:";
         print "<p> Crossed the line? $crossLine </p>";
    print "<p> Using Gears? $gearUse </p>";
    print "<p> Number of high balls: $highBallNumber </p>";
    print "<p> Number of low balls: $lowBallNumber </p>";
    print "<p> Attempted high goal: $highGoal </p>";
    print "<p> Number of high balls scored: $highBallNumber </p>";
    print "<p> Attempted low goal: $lowGoal </p>";
    print "<p> Number of low balls scored: $lowBallNumber </p>";
    if(!empty($feederPreferenceList))
    {
        print "<p> Teleop feeder preference: </p>";
        print "<ul>";
        foreach($feederPreferenceList as $tempmp)
        {
            print "<li>";
            print $tempmp;
        }
        print "</ul>";
    }
    print "<p> Capable of picking up balls? $pickUp </p>";
    print "<p> Gears loaded into robot? $gearsLoadedInRobot </p>";
    print "<p> Gears passed into airship? $gearsPassedInAirship </p>";
    if(!empty($gearPegPreferenceList))
    {
        print "<p> Teleop peg preference: </p>";
        print "<ul>";
        foreach($gearPegPreferenceList as $tempmp)
        {
            print "<li>";
            print $tempmp;
        }
        print "</ul>";
    }
    print "<p> Able to climb rope? $climbRope </p>";
    print "<p> Comments: $comments </p>";
    if(!empty($competitionList))
    {
        print "<p> Competition List: </p>";
        print "<ul>";
        foreach($competitionList as $tempmp)
        {
            print "<li>";
            print $tempmp;
        }
        print "</ul>";
    }
    print "<p> Final team score: $teamScore </p>";
    print "<p> Competition: $competition </p>";
    print "<p> Reporter: " . $reporterFirstName . " " . $reporterLastName . " </p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>

