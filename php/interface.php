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
        <!-- begin .btn-group -->
        <div class="btn-group">
            <button>Stadium</button>
            <button>Match</button>
            <button>Goal</button>
            <button>Player</button>
            <button>Team</button>
        </div>
        <!-- end .btn-group -->

        <!-- begin .query -->
        <div class="queries">
            <?php include("getQuerySelection.php"); ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <select name="queries" onchange="this.form.submit();">
                    <?php echo getQuerySelection($selected); ?>
                </select>
            </form>
        </div>

        <!-- end .query -->

        <!-- begin .stadium -->
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
        <!-- end .stadium -->

        <!-- begin .match -->
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
        <!-- end .match -->

        <!-- begin .goal -->
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
        <!-- end .goal -->

        <!-- begin .player -->
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
        <!-- end .player -->

        <!-- begin .team -->
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
        <!-- end .team -->
    </div>
    <!-- end .container -->
</body>
</html>