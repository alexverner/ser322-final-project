 <?php
    //define constants
    $servername = "localhost";
    $username = "encryptedUser";
    $password = "secretPass";
    $database = "fifaDB";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //check connection
    if (mysqli_connect_errno()) {
        printf("Connection failed: %s \n", mysqli_connect_error());
        exit();
    } 

    //test - print connection info
    //printf("\nHost info: %s\n", mysqli_get_host_info($conn));
?>