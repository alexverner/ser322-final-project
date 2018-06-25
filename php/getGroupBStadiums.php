<?php
    //connect
    //require_once("./mysqli_connect.php");
    include("./mysqli_connect.php");

    //query
    $playerQuery = "SELECT stadiumName, homeTeamName, awayTeamName, matchups.date AS mDate ".
                   "FROM matchups, team ".
                   "WHERE bracket='B' AND teamName=homeTeamName ".
                   "UNION ".
                   "SELECT stadiumName, homeTeamName, awayTeamName, matchups.date ".
                   "FROM matchups, team ".
                   "WHERE bracket='B' AND teamName=homeTeamName ";

    if(!$result = $conn->query($playerQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{

        //construct table with appropriate headings
        echo '<table><thead><tr><th>Stadium Name</th>'.
             '<th>Home Team</th>'.
             '<th>Away Team</th>'.
             '<th>Date</th>'.
             '</tr></thead><tbody>';

        while($row = $result->fetch_assoc()){
            echo '<tr><td>'.$row['stadiumName'].'</td><td>'.
            $row['homeTeamName'].'</td><td>'.
            $row['awayTeamName'].'</td><td>'.
            $row['mDate'].'</td></tr>';
        }
        echo '</tbody></table>';

        mysqli_free_result($result);
    }

    //close connection elsewhere
    mysqli_close($conn);
?>