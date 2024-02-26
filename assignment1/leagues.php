<?php
    include('includes/connect.php');

    $query = 'SELECT * FROM leagues';

    $leagues = mysqli_query($connect, $query);
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
                <h1 class="my-2">Leagues</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">

        <?php

        foreach($leagues as $league){

            echo '<div class="col-lg-3 col-md-4  col-sm-6 px-3 mb-3">
                <div class="card h-100 border border-dark custom-card">
                <img src="' . $league['leagueURL'] . '" class="card-img-top" alt="league image">
                    <div class="card-body">
                        <h5 class="card-title custom-card-title">' . $league['league_name'] . '</h5>
                        <p class="mb-2"><strong>Country:</strong> ' . $league['country'] . '</p>
                        <p class="mb-2"><strong>Season:</strong> ' . $league['season'] . '</p>
                        <p class="mb-2"><strong>Start Date:</strong> ' . $league['start_date'] . '</p>
                        <p class="mb-2"><strong>End Date:</strong> ' . $league['end_date'] . '</p>
                    </div>
                </div>
            </div>';
        }
            
        ?>
        </div>
    </div>
    
</body>
</html>