<?php
    // Database Connection
    $server = "localhost";
    $username = "admin";
    $password = "";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password);
    
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }else{
        echo "Connection was successful<br>";
    }

    // Check if the database exists
    $database = "Lab11";
    if(mysqli_select_db($conn, $database)) {
        echo "The database already exists!<br>";
    } else {
        // Creating Database
        $sql = "CREATE DATABASE $database"; 
        $result = mysqli_query($conn, $sql);

        // Check for the database creation success
        if($result){
            echo "The db was created successfully!<br>";
        }else{
            echo "The db was not created successfully because of this error ---> ".
            mysqli_error($conn);
        }
    }

    // Close the connection
    mysqli_close($conn);
?>
