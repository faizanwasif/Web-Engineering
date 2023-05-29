<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    // Connecting to the Database
    $servername = "localhost";
    $username = "admin";
    $password = "";
    $database = "Lab11";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: " . mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
    }

    $hos_table = 'HosInfo';
    $pat_table = 'PatInfo';

    if(!(mysqli_query($conn, "SELECT * FROM HosInfo"))){
        // Create a table in the db
        $sql = "CREATE TABLE HosInfo (
            id INT NOT NULL AUTO_INCREMENT,
            name VARCHAR(50) NOT NULL,
            area_code INT(3) NOT NULL,
            ph_num INT(7) NOT NULL,
            address TEXT NOT NULL,
            city VARCHAR(255) NOT NULL,
            state VARCHAR(255) NOT NULL,
            postal INT NOT NULL,
            country VARCHAR(255) NOT NULL,
            PRIMARY KEY (id)
        )";
        $result = mysqli_query($conn, $sql);
    
        // Check for the table creation success
        if($result){
            echo "The HosInfo table was created successfully!<br>";
        }
        else{
            echo "The HosInfo table was not created successfully because of this error ---> ".
            mysqli_error($conn);
        }
        
    }else{
        echo "Table Already Exists";
    }
    

    if(!(mysqli_query($conn, "SELECT * FROM PatInfo"))){
        $sql1 = "CREATE TABLE PatInfo (
            id INT NOT NULL AUTO_INCREMENT,
            hos_id INT NOT NULL,
            address TEXT NOT NULL,
            city VARCHAR(255) NOT NULL,
            state VARCHAR(255) NOT NULL,
            postal INT NOT NULL,
            country VARCHAR(255) NOT NULL,
            PRIMARY KEY (id),
            FOREIGN KEY (hos_id) REFERENCES HosInfo(id) ON DELETE RESTRICT ON UPDATE RESTRICT
        )";

        $result = mysqli_query($conn, $sql1);

        // Check for the table creation success
        if($result){
            echo "The PatInfo table was created successfully!<br>";
        }
        else{
            echo "The PatInfo table was not created successfully because of this error ---> ".
            mysqli_error($conn);
        }
        
    }else{
        echo "Table Already Exists";
    }

?>
