<?PHP
    $competitionList =  $_POST['competitions'];
    $teamStatsList = $_POST['teamStats'];
    $sortBy = $_POST['sortBy'];
    
     if(!empty($competitionList))
    {
        print "<p> <b> Competitions:  </b>";
        foreach($competitionList as $tempmp)
        {
            print "  ";
            print $tempmp;
        }
    }
     if(!empty($teamStatsList))
    {
        print "  <b> Stats shown:  </b>";
        foreach($teamStatsList as $tempmp)
        {
            print "  ";
            print $tempmp;
        }
    }
    print "  <b> Sorted by: $sortBy  </b></p>";
    /*
     * Depending on values above, get list of teams from database & display it in table format (alphabetical or
     * stat) w/ clickable links for viewing detailed reports TO DO
     */
    // first open connection
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
    
    if ($result -> num_rows > 0) {
         print "<p> <font size = 5> <center> Pit Report Table </center> </font> <table>
                <tr> <th> Team Number </th> <th> Max Speed </th> <th> Low Goal </th> <th> High Goal</th> <th> Gears </th> <th> Reporter </th> <th> Report ID </th> </tr>";
        while($row = $result -> fetch_assoc()) {
            print "<tr> <td> <a href=\"showPitReport.php?reportID=" . $row['reportID'] ."\">" . $row['teamNumber'] . "</a> </td> <td>" . $row['maxSpeed'] . "</td> <td>" . $row['lowGoal'] . "</td> <td>" . $row['highGoal'] . "</td> <td>" . $row['capableOfGears'] . "</td> <td>" . $row['reporterFirstName'] . " " . $row['reporterLastName'] . "</td> <td>" . $row['reportID'] . "</td> </tr>";
        }
        print "</p> </table>";
    } else {
        echo "0 results";
    }
    $matchTable = "matchreporttable";
    
    $sql = "SELECT * FROM " . $matchTable;
    
    $result = $conn->query($sql);
    
    if ($result -> num_rows > 0) {
         print "<p> <font size = 5> <center> Match Report Table </center> </font> <table>
                <tr> <th> Team Number </th> <th> Competition </th> <th> Score </th> <th> Low Goals </th> <th> High Goals </th> <th> Gears Loaded </th> <th> Reporter </th> <th> Report ID </th> </tr>";
        while($row = $result -> fetch_assoc()) {
            print "<tr> <td> <a href=\"showMatchReport.php?reportID=" . $row['reportID'] ."\">" . $row['teamNumber'] . "</a> </td> <td> " . $row['competition'] . "</td> <td>" . $row['teamScore'] . "</td> <td>" . $row['lowBallNumber'] . "</td> <td>" . $row['highBallNumber'] . "</td> <td>" . $row['gearsLoadedInRobot'] . "</td> <td>" . $row['reporterFirstName' ] . " " . $row['reporterLastName'] . "</td> <td>" . $row['reportID'] . "</td> </tr>";
        }
        print "</p> </table>";
    } else {
        echo "0 results";
    }
    
    $conn->close();
    
    
    # Team name, team competition, team score, robot speed, # of balls in low/high goal,
    # Number of gears loaded into airship
//    print "<p> <table>
//    <tr> <th> Team Number </th> <th> Team Comp </th> <th> Team Score </th> <th> Robot Speed </th> <th> Balls Low Goal </th> <th> Balls High Goal </th> <th> Gears Loaded </th> <th> Pit/Match </th> <th> Reporter </th> <th> Report ID </th> </tr>
//    <tr> <td> <a href=\"showMatchReport.php?reportID=3\"> 1458 </a> </td> <td> Competition X </td> <td> 120 </td> <td> 14 mph </td> <td> 15 </td> <td> 12 </td> <td> 5 </td> <td> Match </td> <td> AB </td> <td> 3 </td> </tr>
//    <tr> <td> <a href=\"showPitReport.php?reportID=14\"> 1478 </a> </td> <td> Competition X </td> <td> 180 </td> <td> 14 mph </td> <td> 17 </td> <td> 22 </td> <td> 10 </td> <td> Pit </td> <td> CD </td> <td> 14 </td> </tr> </table> </p>";
    
    
?>