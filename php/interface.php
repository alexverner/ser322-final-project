<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>SER 322 Final Project</title>
</head>
<body>
    <!-- begin .container -->
    <div class="container">
        <!-- begin .row -->
        <div class="row">
            <!-- begin .btn-group -->
            <div class="btn-group">
                <button><a href="#stadium-link">Stadium</a></button>
                <button><a href="#match-link">Match</a></button>
                <button><a href="#goal-link">Goal</a></button>
                <button><a href="#player-link">Player</a></button>
                <button><a href="#team-link">Team</a></button>
            </div>
            <!-- end .btn-group -->

            <!-- begin .query-select -->
            <div class="query">
                <?php include("getQuerySelection.php"); ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <select name="queries" onchange="this.form.submit();">
                        <?php echo getQuerySelection($selected); ?>
                    </select>
                </form>
            </div>
            <!--end .query-select-->

        </div>
        <!-- end .row -->
        
        <!-- begin .query-result -->
        <div class="table-wrapper table-query-result">
            <?php 
                include("getSelectedQueryResults.php");
                echo getSelectedQueryResults($selected); ?>
        </div>
        <!-- end .query-result -->

        <!-- begin .stadium -->
        <div class="table-wrapper" id="stadium-link">
            <table class="stadium">
                <thead>
                    <tr>
                        <th>Stadium Name</th>
                        <th>City</th>
                    </tr>
                </thead>
    
                <tbody>
                    <?php include("getStadiums.php"); ?>
                </tbody>
            </table>
        </div>
        <!-- end .stadium -->

        <!-- begin .match -->
        <div class="table-wrapper" id="match-link">
            <table class="match">
                <thead>
                    <tr>
                        <th>Match ID</th>
                        <th>Home Team Name</th>
                        <th>Away Team Name</th>
                        <th>Stadium Name</th>
                        <th>Date</th>
                    </tr>
                </thead>
    
                <tbody>
                    <?php include("getMatchups.php"); ?>
                </tbody>
            </table>
        </div>
        <!-- end .match -->

        <!-- begin .goal -->
        <div class="table-wrapper" id="goal-link">
            <table class="goal">
                <thead>
                    <tr>
                        <th>Goal ID</th>
                        <th>Player ID</th>
                        <th>Match ID</th>
                        <th>Time</th>
                    </tr>
                </thead>
    
                <tbody>
                    <?php include("getGoals.php"); ?>
                </tbody>
            </table>
        </div>
        <!-- end .goal -->

        <!-- begin .player -->
        <div class="table-wrapper" id="player-link">
            <table class="player">
                <thead>
                    <tr>
                        <th>Player ID</th>
                        <th>Player Name</th>
                        <th>Team Name</th>
                        <th>Position</th>
                        <th>Birth Year</th>
                    </tr>
                </thead>
    
                <tbody>
                    <?php include("getPlayers.php"); ?>
                </tbody>
            </table>
        </div>
        <!-- end .player -->

        <!-- begin .team -->
        <div class="table-wrapper" id="team-link">
            <table class="team">
                <thead>
                    <tr>
                        <th>Team Name</th>
                        <th>Head Coach</th>
                        <th>Group</th>
                        <th>Points</th>
                    </tr>
                </thead>
    
                <tbody>
                    <?php include("getTeams.php"); ?>
                </tbody>
            </table>
        </div>
        <!-- end .team -->
    </div>
    <!-- end .container -->
</body>
</html>