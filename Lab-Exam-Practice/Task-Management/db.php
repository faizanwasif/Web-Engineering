<?php


    $conn = mysqli_connect("localhost", "root","","task-management");

    if(!$conn){
        die("Connection to db failed : ". mysqli_connect_error());
    }

?>