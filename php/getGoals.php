<?php
    //connect
    include("./mysqli_connect.php");

    //query
    $goalQuery = "SELECT * FROM goal";

    if(!$result = $conn->query($goalQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{
        while($row = $result->fetch_assoc()){
            echo '<tr><td>'.$row['goalID'].'</td><td>'.
            $row['playerID'].'</td><td>'.
            $row['matchID'].'</td><td>'.
            $row['timeMin'].'</td></tr>';
        }

        mysqli_free_result($result);
    }

    //close connection
    mysqli_close($conn);
?>