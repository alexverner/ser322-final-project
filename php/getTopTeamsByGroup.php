<?php
    //connect
    //require_once("./mysqli_connect.php");
    include("./mysqli_connect.php");

    //query
    $playerQuery = "SELECT teamName, bracket, points ".
                   "FROM team ".
                   "ORDER BY bracket ASC, points DESC";

    if(!$result = $conn->query($playerQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{

        //construct table with appropriate headings
        echo '<table><thead><tr><th>Team Name</th>'.
             '<th>Group</th>'.
             '<th>Points</th></tr></thead><tbody>';

        while($row = $result->fetch_assoc()){
            echo '<tr><td>'.$row['teamName'].'</td><td>'.
            $row['bracket'].'</td><td>'.
            $row['points'].'</td></tr>';
        }
        echo '</tbody></table>';

        mysqli_free_result($result);
    }

    //close connection elsewhere
    mysqli_close($conn);
?>