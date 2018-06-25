<?php
    function getSelectedQueryResults($selected){
        //global $selected;
        switch($selected){
            case 2: include("getTopScorers.php"); break;
            default: echo "<h1>Select a Query to Run... </h1>"; break;

            //TODO: add cases for each query including appropriate query.php file 
        }
    }
?>