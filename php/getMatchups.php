<?php

    $matchupQuery = "SELECT * FROM matchups";

    if(!$result = $conn->query($matchupQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{
        while($row = $result->fetch_assoc()){
            echo '<br />'.$row['matchID'].' '.$row['homeTeamName'].
            ' '.$row['awayTeamName'].' '.$row['stadiumName'].' '.
            $row['date'];
        }

        mysqli_free_result($result);
    }
?>