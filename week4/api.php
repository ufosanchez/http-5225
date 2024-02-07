<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- <div class="conatiner-fluid">
        <div class="conatiner">
            <div class="col">
                <h1 class="mt-3 mb-3">aaa</h1>
            </div>
        </div>
    </div> -->
    <?php
        function getUsers(){
            $url = "https://jsonplaceholder.typicode.com/users";
            $data = file_get_contents($url);
            return json_decode($data, true);
        }

        $users = getUsers();

        echo '<div class="container">';
            echo '<div class="row">';
                for ($i = 0; $i < count ($users); $i ++){
                    echo '<div class="col-lg-3 col-md-4">';
                        echo '<div class="card border-dark mb-3">';
                            echo '<div class="card-body">';
                                echo '<h5 class="card-title">'.$users[$i]['name'].'</h5>';
                                echo '<p class="card-text">'.$users[$i]['username'].'</p>';
                                echo '<p class="card-text">'.$users[$i]['email'].'</p>';

                                echo '<p class="card-text"><span class="fw-bold">City : </span>'.$users[$i]['address']['city'].' - <span class="fw-bold">Street: </span>'.$users[$i]['address']['street'].' - <span class="fw-bold">Suite: </span>'.$users[$i]['address']['suite'].' - <span class="fw-bold">Zipcode: </span>'.$users[$i]['address']['zipcode'].'</p>';

                                echo '<p class="card-text">'.$users[$i]['phone'].'</p>'; 
                                echo '<a href="mailto: '.$users[$i]['website'].'" class="btn btn-primary">'.$users[$i]['website'].'</a>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            echo '</div>';
        echo '</div>';  
        

        /* echo "<pre>";
            echo print_r($users);
        echo"</pre>"; */
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>