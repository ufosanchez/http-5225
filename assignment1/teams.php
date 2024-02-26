<?php
    include('includes/connect.php');

    $query = 'SELECT teams.*, leagues.league_name FROM teams JOIN leagues ON teams.league_id = leagues.league_id;';
    $teams = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soccer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include('reusables/nav.php') ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="my-2">Teams</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">

        <?php
            foreach($teams as $team){
                echo '<div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 border border-dark custom-card">
                    <img src="' . $team['teamLogo'] . '" class="card-img-top" alt="team image">
                        <div class="card-body">
                            <h5 class="card-title custom-card-title">' . $team['team_name'] . '</h5>
                            <p class="mb-1"><strong>League:</strong> <span class="join_sql_data">' . $team['league_name'] . '</span></p>
                            <p class="mb-1"><strong>Foundation Date:</strong> ' . $team['foundation_date'] . '</p>
                            <p class="mb-1"><strong>Country:</strong> ' . $team['country'] . '</p>
                            <p class="mb-1"><strong>Stadium Name:</strong> ' . $team['stadium_name'] . '</p>
                        </div>
                    </div>
                </div>';
            }
        ?>
        </div>
    </div>
    
</body>
</html>
