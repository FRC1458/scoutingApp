<?PHP

print "<p> TEST </p>";


    $servername = "localhost";
    $username = "esha";
    $password = "esha1234";
    $dbname = "scoutDB";
    $pitTable = "pitreporttable";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection: " . $conn->connect_error);
    }
   $matchTable = "matchreporttable";
    
    $sql = "SELECT * FROM " . $matchTable;
    
    $result = $conn->query($sql);
    ?>
<html>
    <link  rel="stylesheet" type="text/css" href="dumpMatchTable.css" />
   <body>
 
  <?PHP
    if ($result -> num_rows > 0) {
     echo '<table cellpadding="0" cellspacing="0" class="db-table">';
         print "<p> <font size = 5> <center> Match Report Table </center> </font> <table>
                <tr> <th> Team Number </th>
                <th> Drive Station</th>
                <th> Auto Hopper</th>
                <th> Cross Line </th>
                <th> Gear Use</th>
                <th> Shooter Rating</th>
                <th> Engage Hopper</th>
                <th> Shooting Place</th>
                <th> Where is the shooting place</th>
                <th> Susceptible to defense</th>
                <th> High goal</th>
                <th> Low Goal</th>
                <th> Opposite Left Feeder</th>
                <th> Opposite Right Feeder</th>
                <th> Same Side Feeder</th>
                <th> No Feeder</th>
                <th> Pick Up Balls</th>
                <th> Nuclear option</th>
                <th> Teleop hopper</th>
                <th> Gears passed in airship</th>
                <th> Left peg</th>
                <th> Right ;eg</th>
                <th> Center peg</th>
                <th> Heading to rope time</th>
                <th> Time to grab rope</th>
                <th> Time to climb rope</th>
                <th> Light on past T=0</th>
                <th> Climb rope?</th>
                <th> Comments</th>
                <th> Robot defense</th>
                <th> Robot rating</th>
                <th> Competition</th>
                <th> Team Score</th>
                <th> Reporter </th>
                <th> Report ID </th>
                </tr>";
        while($row = $result -> fetch_assoc()) {
            print "<tr> <td> <a href=\"showMatchReport.php?reportID=" . $row['reportID'] ."\">"
            . $row['teamNumber'] . "</a> </td>
            <td> " . $row['driveStation'] . "</td>
            <td> " . $row['autoHopper'] . "</td>
            <td> " . $row['crossLine'] . "</td>
            <td> " . $row['gearUse'] . "</td>
            <td> " . $row['shooterRating'] . "</td>
            <td> " . $row['engageHopper'] . "</td>
            <td> " . $row['shootingPlace'] . "</td>
            <td> " . $row['whereShootingPlace'] . "</td>
            <td> " . $row['susceptibleDefense'] . "</td>
            <td> " . $row['highGoal'] . "</td>
            <td> " . $row['lowGoal'] . "</td>
            <td> " . $row['oppositeLeft'] . "</td>
            <td> " . $row['oppositeRight'] . "</td>
            <td> " . $row['sameSide'] . "</td>
            <td> " . $row['noFeeder'] . "</td>
            <td> " . $row['pickUp'] . "</td>
            <td> " . $row['nuclear'] . "</td>
            <td> " . $row['teleopHopper'] . "</td>
            <td> " . $row['gearsPassedInAirship'] . "</td>
            <td> " . $row['leftPeg'] . "</td>
            <td> " . $row['rightPeg'] . "</td>
            <td> " . $row['centerPeg'] . "</td>
            <td> " . $row['headingToRopeTime'] . "</td>
            <td> " . $row['timeToGrab'] . "</td>
            <td> " . $row['timeToClimb'] . "</td>
            <td> " . $row['lightOn'] . "</td>
            <td> " . $row['climbRope'] . "</td>
            <td> " . $row['comments'] . "</td>
            <td> " . $row['robotDefense'] . "</td>
            <td> " . $row['robotRating'] . "</td>
            <td> " . $row['competition'] . "</td>
            <td>" . $row['teamScore'] . "</td>

            <td>" . $row['reporterFirstName' ] . " " . $row['reporterLastName'] . "</td>
            <td>" . $row['reportID'] . "</td> </tr>";
        }
        print "</p> </table>";
    } else {
        echo "0 results";
    }

?>
  </body>

</html>
