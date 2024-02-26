<?php
    include('includes/connect.php');

    if(isset($_GET['search'])){
        $query = 'SELECT players.*, teams.team_name, teams.teamLogo, leagues.leagueURL FROM players JOIN teams ON players.team_id = teams.team_id JOIN leagues ON leagues.league_id = teams.league_id WHERE players.fname LIKE "%'.$_GET['search_key'].'%" OR players.lname LIKE "%'.$_GET['search_key'].'%" OR CONCAT(fname, " ", lname) LIKE "%'.$_GET['search_key'].'%"';
    } else {
        $query = 'SELECT players.*, teams.team_name, teams.teamLogo, leagues.leagueURL FROM players JOIN teams ON players.team_id = teams.team_id JOIN leagues ON leagues.league_id = teams.league_id';
    }

    
    $players = mysqli_query($connect, $query);
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
                <h1 class="my-2">Players</h1>
            </div>
        </div>
    </div>

    <div class="container mb-2">
        <div class="row">
            <div class="col">
            <form method="GET" action="">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="search_key" placeholder="Seach by Soccer Player" style="width:30%">
                </div>
                <button type="submit" name="search" class="btn btn-primary">Search Player</button>
            </form>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">

        <?php
            foreach($players as $player){

                echo '<div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 border border-dark custom-card">
                        <img src="' . $player['imageURL'] . '" class="card-img-top" alt="player image">
                        <div class="card-body">
                            <h5 class="card-title custom-card-title">' . $player['fname'] . ' ' . $player['lname'] . '</h5>
                            <p class="mb-1"><strong>Age:</strong> ' . $player['age'] . '</p>
                            <p class="mb-1"><strong>Shirt #:</strong> ' . $player['shirt_number'] . '</p>
                            <p class="mb-1"><strong>Country:</strong> ' . $player['country'] . '</p>
                            <p class="mb-1"><strong>Team:</strong> ' . $player['team_name'] . '</p>
                            <div class="team-league">
                                <img src="' . $player['teamLogo'] . '" class="card-img-top" alt="team image">
                                <img src="' . $player['leagueURL'] . '" class="card-img-top" alt="league image">
                            </div>
                        </div>
                    </div>
                </div>';
            }
        ?>
        </div>
    </div>
    
</body>
</html>
