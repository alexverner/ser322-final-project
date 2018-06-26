<?php
    //connect
    include("./mysqli_connect.php");

    //query
    $playerQuery = "(SELECT matchID, stadiumName, matchups.date AS 'date'".
                   "FROM player, matchups ".
                   "WHERE teamName = homeTeamName AND PlayerName = 'Cristiano Ronaldo') ".
                   "UNION".
                   "(SELECT matchID, stadiumName, matchups.date ".
                   "FROM player, matchups ".
                   "WHERE teamName = awayTeamName AND PlayerName = 'Cristiano Ronaldo') ";

    if(!$result = $conn->query($playerQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{

        //construct table with appropriate headings
        echo '<table><thead><tr><th>Match ID</th>'.
             '<th>Stadium Name</th>'.
             '<th>Date</th>'.
             '</tr></thead><tbody>';

        while($row = $result->fetch_assoc()){
            echo '<tr><td>'.$row['matchID'].'</td><td>'
            .$row['stadiumName'].'</td><td>'
            .$row['date'].'</td></tr>';
        }
        echo '</tbody></table>';

        mysqli_free_result($result);
    }

    //close connection
    mysqli_close($conn);
?>