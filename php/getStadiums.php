<?php

    $stadiumQuery = "SELECT stadiumName, city FROM stadium";

    if(!$result = $conn->query($stadiumQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{
        while($row = $result->fetch_assoc()){
            echo '<br />'.$row['stadiumName'].$row['city'];
        }

        mysqli_free_result($result);
    }
?>