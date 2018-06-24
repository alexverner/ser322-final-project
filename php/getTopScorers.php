<?php
    //connect
    require_once("./mysqli_connect.php");

    //query
    $playerQuery = "SELECT playerName, COUNT(goalID) ".
                   "FROM player ".
                   "JOIN goal ON player.playerID = goal.playerID ".
                   "GROUP BY player.playerID ".
                   "ORDER BY COUNT(goalID) DESC ".
                   "LIMIT 10";

    if(!$result = $conn->query($playerQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{

        //construct table with appropriate headings
        echo '<table><thead><tr><th>Player Name</th>'.
             '<th>Number of Goals</th></tr></thead><tbody>';

        while($row = $result->fetch_assoc()){
            echo '<tr><td>'.$row['playerName'].'</td><td>'.
            $row['COUNT(goalID)'].'</td></tr>';
        }
        echo '</tbody></table>';

        mysqli_free_result($result);
    }

    //close connection elsewhere
    //mysqli_close($conn);
?>