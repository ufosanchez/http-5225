<?php 

    if(isset($_POST['grades'])){ /* isset -> if this variable is set or not set */
        /* print_r($_POST);
        Array ( [fname] => Arnulfo [lname] => Sánchez [marks] => 94 [imageURL] => https://cdn.britannica.com/51/190751-050-147B93F7/soccer-ball-goal.jpg [grades] => ) */
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $marks = $_POST['marks'];
        $imageURL = $_POST['imageURL'];

        //connecting string
        include('connect.php');

        $query = "INSERT INTO students (fname, lname, marks, imageURL) 
            VALUES (
                '" .mysqli_real_escape_string($connect, $fname). "',
                '" .mysqli_real_escape_string($connect, $lname). "',
                '" .mysqli_real_escape_string($connect, $marks). "',
                '" .mysqli_real_escape_string($connect, $imageURL). "')";

        $student = mysqli_query($connect, $query);

        if($student){
            header('Location: /http-5225/week7/admin/index.php');
        } else{
            echo "Failed" . mysqli_error($connect);
        }
    } else {
        echo "You should not be here!";
    }

?>