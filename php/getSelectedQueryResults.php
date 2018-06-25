<?php
    function getSelectedQueryResults($selected){
        switch($selected){
            case 1: echo "<h1>Select a Query to Run... </h1>"; break;
            case 2: include("getGroupBStadiums.php"); break;
            case 3: include("getRonaldoMatches.php"); break;
            case 4: include("getTopTeamsByGroup.php"); break;
            case 5: include("getTopScorers.php"); break;
            case 6: include("getYoungestPlayers.php"); break;
            default: echo "<h1>Select a Query to Run... </h1>"; break;
        }
    }
?>