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
    $sql = "SELECT * FROM " . $pitTable;
    
    $result = $conn->query($sql);
    
?>
<html>
    <link  rel="stylesheet" type="text/css" href="css/style.css" />
   <body>
 
  <?PHP

    if ($result -> num_rows > 0) {
         echo '<table cellpadding="0" cellspacing="0" class="db-table">';
         print "<p> <font size = 5> <center> Pit Report Table </center> </font> <table>
                <tr> <th> Team Number </th>
                <th> Max Speed </th>
                <th> Transmission </th>
                <th> Wheel # </th>
                <th> Drive Type </th>
                <th> Drive Desc. </th>
                <th> Shooter strategy </th>
                <th> Gear Strategy </th>
                <th> Defense strategy </th>
                <th> Nuclear Strategy </th>
                <th> How to win </th>
                <th> Autonomous </th>
                <th> Auto gears? </th>
                <th> Auto High Goals </th>
                <th> Auto Low Goals </th>
                <th> Auto Hopper </th>
                <th> Auto Cross Line </th>
                <th> Opp Right Feeder </th>
                <th> Opp Left Feeder </th>
                <th> Same Side Feeder </th>
                <th> No feeder </th>
                <th> Low Goal </th>
                <th> High Goal</th>
                <th> Balls per second </th>
                <th> Max balls </th>
                <th> Capable of gears </th>
                <th> Gear left </th>
                <th> Gear right </th>
                <th> Gear middle peg </th>
                <th> Gear none </th>
                <th> Capable of Rope </th>
                <th> Attach time </th>
                <th> Climb time </th>
                <th> Other comments </th>
                <th> San Fransisco Comp </th>
                <th> Sacramento Comp </th>
                <th> Competition 3 </th>
                <th> Reporter </th>
                <th> Report ID </th> </tr>";
        while($row = $result -> fetch_assoc()) {
            print "<tr> <td> <a href=\"showPitReport.php?reportID=" . $row['reportID'] ."\">" . $row['teamNumber'] . "</a> </td>
            <td>" . $row['maxSpeed'] . "</td>
            <td>" . $row['transmission'] . "</td>
            <td>" . $row['wheelNumber'] . "</td>
            <td>" . $row['driveType'] . "</td>
            <td>" . $row['driveDescription'] . "</td>
            <td>" . $row['shooterStrategy'] . "</td>
            <td>" . $row['gearStrategy'] . "</td>
            <td>" . $row['defenseStrategy'] . "</td>
            <td>" . $row['nuclearStrategy'] . "</td>
            <td>" . $row['howToWin'] . "</td>
            <td>" . $row['autonomous'] . "</td>
            <td>" . $row['autonomousGear'] . "</td>
            <td>" . $row['autonomousHighGoal'] . "</td>
            <td>" . $row['autonomousLowGoal'] . "</td>
            <td>" . $row['autonomousHopper'] . "</td>
            <td>" . $row['autonomousCrossLine'] . "</td>
            <td>" . $row['oppositeRight'] . "</td>
            <td>" . $row['oppositeLeft'] . "</td>
            <td>" . $row['sameSide'] . "</td>
            <td>" . $row['none'] . "</td>
            <td>" . $row['lowGoal'] . "</td>
            <td>" . $row['highGoal'] . "</td>
            <td>" . $row['ballsPerSecond'] . "</td>
            <td>" . $row['maxBalls'] . "</td>
            <td>" . $row['capableOfGears'] . "</td>
            <td>" . $row['gearLeft'] . "</td>
            <td>" . $row['gearRight'] . "</td>
            <td>" . $row['gearMiddlePeg'] . "</td>
            <td>" . $row['gearNone'] . "</td>
            <td>" . $row['capableOfRope'] . "</td>
            <td>" . $row['attachTime'] . "</td>
            <td>" . $row['climbTime'] . "</td>
            <td>" . $row['otherComments'] . "</td>
            <td>" . $row['competition1'] . "</td>
            <td>" . $row['competition2'] . "</td>
            <td>" . $row['competition3'] . "</td>
            <td>" . $row['reporterFirstName'] . " " . $row['reporterLastName'] . "</td>
            <td>" . $row['reportID'] . "</td> </tr>";
        }
        print "</p> </table>";
    } else {
        echo "0 results";
    }
    
    

?>
         </body>

</html>
