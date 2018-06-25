<?php
    //connect
    require_once("./mysqli_connect.php");
    include("./mysqli_connect.php");

    //query
    $matchupQuery = "SELECT * FROM matchups";

    if(!$result = $conn->query($matchupQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{
        while($row = $result->fetch_assoc()){
            echo '<tr><td>'.$row['matchID'].'</td><td>'.
            $row['homeTeamName'].'</td><td>'.
            $row['awayTeamName'].'</td><td>'.
            $row['stadiumName'].'</td><td>'.
            $row['date'].'</td></tr>';
        }

        mysqli_free_result($result);
    }

    //close connection elsewhere
    mysqli_close($conn);
?>