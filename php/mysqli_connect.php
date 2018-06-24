 <?php
    //define constants
    $servername = "localhost";
    $username = "encryptedUser";
    $password = "secretPass";
    $database = "fifaDB";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (mysqli_connect_errno()) {
        printf("Connection failed: %s \n", mysqli_connect_error());
        exit();
    } 

    //print connection info
    printf("\nHost info: %s\n", mysqli_get_host_info($conn));

    //query stadiums
    include("getStadiums.php");

    //query matches
    include("getMatchups.php");

    //attempt to use code extracted to php file instead here
    /*

    $stadiumQuery = "SELECT stadiumName, city FROM stadium";
    if(!$result = $conn->query($stadiumQuery)){
        die('There was an error running the query ['.$conn->error.']');
    }else{
        while($row = $result->fetch_assoc()){
            echo '<br />'.$row['stadiumName'].$row['city'];
        }

        mysqli_free_result($result);
    }
    */

    //close connection elsewhere
    mysqli_close($conn);

?>