<?php
    include('../includes/functions.php');
    include('../includes/connect.php');

    if(isset($_POST['addUser'])){
        $query = "INSERT INTO users (name, email, password)
                    VALUES(
                        '" .mysqli_real_escape_string($connect, $_POST['name']). "',
                        '" .mysqli_real_escape_string($connect, $_POST['email']). "',
                        '" .md5($_POST['password']). "')";
        
        mysqli_query($connect, $query);

        set_message("User has been created");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <?php include('../reusables/nav.php') ?>
    
    <div class="container">
    <div class="row">
            <div class="col">
                <?php echo get_message() ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="display-3 mt-4 mb-4">Manage Users</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="fname" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="Enter Email">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" aria-describedby="Enter Password">
                    </div>

                    <button type="submit" name="addUser" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>