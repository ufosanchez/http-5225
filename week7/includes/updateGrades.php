<?php 

    if(isset($_POST['grades'])){ 
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $marks = $_POST['marks'];
        $imageURL = $_POST['imageURL'];

        //connecting string
        include('connect.php');

        $query = "UPDATE students SET fname = '$fname', lname = '$lname', marks = '$marks', imageURL = '$imageURL' WHERE id = $id";

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