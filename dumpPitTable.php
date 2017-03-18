<?PHP

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
    <link  rel="stylesheet" type="text/css" href="dumpMatchTable.css" />
    <link  rel="stylesheet" type="text/css" href="/font-awesome-4.7.0/css/font-awesome.min.css" />
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
                <th> Feeder </th>
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
                <th> Competitions </th>
                <th> Reporter </th>
                <th> Report ID </th> </tr>";
        while($row = $result -> fetch_assoc()) {
            $comps = "";
            if ($row['competition1'] == 1) {
                $comps = $comps . "San Fransisco, ";
            }
            if ($row['competition2'] == 1) {
                $comps = $comps . "Sacramento, ";
            }
            if ($row['competition3'] == 1) {
                $comps = $comps . "Comp 3, ";
            }
            $comps = rtrim($comps, ", "); // Something

            $feeder = "";
            if ($row['oppositeRight'] == 1) {
                $feeder = $feeder . "Opp Right, ";
            }
            if ($row['oppositeLeft'] == 1) {
                $feeder = $feeder . "Opp Left, ";
            }
            if ($row['sameSide'] == 1) {
                $feeder = $feeder . "Same Side, ";
            }
            if ($row['none'] == 1) {
                $feeder = $feeder . "None, ";
            }
            $feeder = rtrim($feeder, ", "); // Something


            /*$auto = "";
            if ($row['oppositeRight'] == 1) {
                $feeder = $feeder . "Opp Right, ";
            }
            if ($row['oppositeLeft'] == 1) {
                $feeder = $feeder . "Opp Left, ";
            }
            if ($row['sameSide'] == 1) {
                $feeder = $feeder . "Same Side, ";
            }
            if ($row['none'] == 1) {
                $feeder = $feeder . "None, ";
            }
            $auto = rtrim($auto, ", "); // Something*/


            print "<tr> <td> <a href=\"showPitReport.php?reportID=" . $row['reportID'] ."\">" . $row['teamNumber'] . "</a> </td>
            <td>" . $row['maxSpeed'] . "</td>
            <td>" . ($row['transmission'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['wheelNumber']) . "</td>
            <td>" . ($row['driveType']) . "</td>
            <td>" . ($row['driveDescription']) . "</td>
            <td>" . ($row['shooterStrategy'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['gearStrategy'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['defenseStrategy'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['nuclearStrategy'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['howToWin']) . "</td>
            <td>" . ($row['autonomous'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['autonomousGear'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['autonomousHighGoal'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['autonomousLowGoal'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['autonomousHopper'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['autonomousCrossLine'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . $feeder . "</td>
            <td>" . ($row['lowGoal'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['highGoal'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['ballsPerSecond']) . "</td>
            <td>" . ($row['maxBalls']) . "</td>
            <td>" . ($row['capableOfGears'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['gearLeft'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['gearRight'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['gearMiddlePeg'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['gearNone'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['capableOfRope'] == 1 ? " <i class=\"fa fa-check fa-2x\"></i>" : " <i class=\"fa fa-times fa-2x\"></i>") . "</td>
            <td>" . ($row['attachTime']) . "</td>
            <td>" . ($row['climbTime']) . "</td>
            <td>" . ($row['otherComments']) . "</td>
            <td>" . $comps . "</td>
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
