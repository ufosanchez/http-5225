<?php 

    if(isset($_GET['delete'])){ 
        
        $id = $_GET['id'];

        //connecting string
        include('connect.php');

        $query = "DELETE FROM students WHERE id = '$id'";

        $student = mysqli_query($connect, $query);

        if($student){
            header("Location: /http-5225/week7/admin/index.php");
        } else{
            echo "Failed" . mysqli_error($connect);
        }
    } else {
        echo "You should not be here!";
    }

?>