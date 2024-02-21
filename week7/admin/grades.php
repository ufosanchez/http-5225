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
                <h1 class="display-3 mt-4 mb-4">Add Grades</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/http-5225/week7/includes/addGrades.php" method="POST">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="Enter First Name">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Enter Last Name">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" name="marks" aria-describedby="Enter marks">
                    </div>
                    <div class="mb-3">
                        <label for="imageURL" class="form-label">Image Path</label>
                        <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="Enter Image URL">
                    </div>

                    <button type="submit" name="grades" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>