<?php
    //connect
    //require_once("./mysqli_connect.php");
    include("./mysqli_connect.php");

    //query
    $stadiumQuery = "SELECT stadiumName, city FROM stadium";

    if(!$result = $conn->query($stadiumQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{
        while($row = $result->fetch_assoc()){
            echo '<tr><td>'.$row['stadiumName'].'</td><td>'.
            $row['city'].'</td></tr>';
        }

        mysqli_free_result($result);
    }

    //close connection elsewhere
    mysqli_close($conn);
?>