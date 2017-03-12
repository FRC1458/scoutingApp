<?PHP
    $teamNumber = $_POST['teamNumber'];
    $driveStation = $_POST['driveStation'];
    $autoHopper = $_POST['autoHopper'];
    $crossLine = $_POST['crossLine'];
    $gearUse = $_POST['gearUse'];
    $shooterRating = $_POST['shooterRating'];
    $engageHopper = $_POST['engageHopper'];
    $shootingPlace = $_POST['shootingPlace'];
    $whereShootingPlace = $_POST['whereShootingPlace'];
    $susceptibleDefense = $_POST['susceptibleDefense'];
    $highGoal = $_POST['highGoal'];
    $lowGoal = $_POST['lowGoal'];
    $feederPreferenceList = $_POST['feederPreference'];
    $pickUp = $_POST['pickUp'];
    $nuclear = $_POST['nuclear'];
    $teleopHopper = $_POST['teleopHopper'];
    $gearsPassedInAirship = $_POST['gearsPassedInAirship'];
    $gearPegPreferenceList = $_POST['gearPegPreference'];
    $headingToRopeTime = $_POST['headingToRopeTime'];
    $timeToGrab = $_POST['timeToGrab'];
    $timeToClimb = $_POST['timeToClimb'];
    $lightOn = $_POST['lightOn'];
    $climbRope = $_POST['climbRope'];
    $comments = $_POST['comments'];
    $robotDefense = $_POST['robotDefense'];
    $robotRating = $_POST['robotRating'];
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
    $sql = "INSERT INTO $matchTable (teamNumber, driveStation, autoHopper, crossLine, gearUse, shooterRating,
    engageHopper, shootingPlace, whereShootingPlace, susceptibleDefense, highGoal, lowGoal,
    oppositeLeft, oppositeRight, sameSide, noFeeder, pickUp, nuclear, teleopHopper, gearsPassedInAirship, 
    leftPeg, rightPeg, centerPeg, headingToRopeTime, timeToGrab, timeToClimb, lightOn, climbRope,
    comments, robotDefense, robotRating, competition, teamScore, reporterFirstName, reporterLastName)
    VALUES ('$teamNumber', '$driveStation', '$autoHopper', '$crossLine', '$gearUse', '$shooterRating',
    '$engageHopper', '$shootingPlace', '$whereShootingPlace', '$susceptibleDefense', '$highGoal', 
    '$lowGoal', '$oppositeLeft', '$oppositeRight', '$sameSide', '$noFeeder', '$pickUp', '$nuclear',
    '$teleopHopper', '$gearsPassedInAirship', '$leftPeg', '$rightPeg', '$centerPeg', '$headingToRopeTime',
    '$timeToGrab', '$timeToClimb', '$lightOn', $climbRope, '$comments', '$robotDefense', '$robotRating',
    '$competition', '$teamScore', '$reporterFirstName', '$reporterLastName')";
    
    $result = $conn->query($sql);
    
    if ($result === TRUE) {
        echo "Following report added to database:";
    print "<p> Drive station? $driveStation </p>";
    print "<p> Autonomous hopper? $autoHopper </p>";
    print "<p> Crossed the line? $crossLine </p>";
    print "<p> Using Gears? $gearUse </p>";
    print "<p> Shooter rating: $shooterRating </p>";
    print "<p> Engaged hopper? $engageHopper </p>";
    print "<p> Shot from a specific place? $shootingPlace </p>";
    print "<p> If so, where? $whereShootingPlace </p>";
    print "<p> Susceptible to defense? $susceptibleDefense </p>";
    print "<p> Attempted high goal: $highGoal </p>";
    print "<p> Attempted low goal: $lowGoal </p>";

    
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
    print "<p> Nuclear option? $nuclear </p>";
    print "<p> Teleop hopper? $teleopHopper </p>";
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
    print "<p> When did it head to the rope (seconds)? $headingToRopeTime </p>";
    print "<p> How long did it take to grab the rope (seconds)? $timeToGrab </p>";
    print "<p> How long did it take to climb the rope (seconds)? $timeToClimb </p>";
    print "<p> Did the light stay on past T=0? $lightOn </p>";
    print "<p> Able to climb rope? $climbRope </p>";
    print "<p> Comments: $comments </p>";
    print "<p> Does the robot play defense? $robotDefense </p>";
    print "<p> Robot rating: $robotRating </p>";
    
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

