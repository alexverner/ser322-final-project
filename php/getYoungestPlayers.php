<?php
    //connect
    include("./mysqli_connect.php");

    //query
    $playerQuery = "SELECT playerName, DOB, ".
                   "ROUND(DATEDIFF(CURRENT_DATE(), DOB)/365.25) AS 'age' ".
                   "FROM player ".
                   "ORDER BY ROUND(DATEDIFF(CURRENT_DATE(), DOB)/365.25) ".
                   "LIMIT 10";

    if(!$result = $conn->query($playerQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{

        //construct table with appropriate headings
        echo '<table><thead><tr><th>Player Name</th>'.
             '<th>Date of Birth</th>'.
             '<th>Age</th></tr></thead><tbody>';

        while($row = $result->fetch_assoc()){
            echo '<tr><td>'.$row['playerName'].
            '</td><td>'.$row['DOB'].
            '</td><td>'.$row['age'].'</td></tr>';
        }
        echo '</tbody></table>';

        mysqli_free_result($result);
    }

    //close connection
    mysqli_close($conn);
?>