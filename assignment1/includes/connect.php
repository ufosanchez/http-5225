<?php 

    /* $connect = mysqli_connect('localhost', 'root', 'root', 'soccer'); */
    $connect = mysqli_connect('sql311.infinityfree.com', 'if0_35758270', 'rTtUvORAMwAn', 'if0_35758270_soccer');
    if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
    } 

?>