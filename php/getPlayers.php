<?php
    //connect
    require_once("./mysqli_connect.php");

    //query
    $playerQuery = "SELECT * FROM player";

    if(!$result = $conn->query($playerQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{
        while($row = $result->fetch_assoc()){
            echo '<tr><td>'.$row['playerID'].'</td><td>'.
            $row['playerName'].'</td><td>'.
            $row['teamName'].'</td><td>'.
            $row['position'].'</td><td>'.
            $row['DOB'].'</td></tr>';
        }

        mysqli_free_result($result);
    }

    //close connection elsewhere
    //mysqli_close($conn);
?>