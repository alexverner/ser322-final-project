<?php
    //connect
    require_once("./mysqli_connect.php");

    //query
    $teamQuery = "SELECT * FROM team";

    if(!$result = $conn->query($teamQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{
        while($row = $result->fetch_assoc()){
            echo '<tr><td>'.$row['teamName'].'</td><td>'.
            $row['coach'].'</td><td>'.
            $row['bracket'].'</td><td>'.
            $row['points'].'</td></tr>';
        }

        mysqli_free_result($result);
    }

    //close connection elsewhere
    //mysqli_close($conn);
?>