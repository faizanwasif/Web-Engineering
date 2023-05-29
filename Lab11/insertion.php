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
    // Insert data into HosInfo table
    $sql = "INSERT INTO HosInfo (name, area_code, ph_num, address, city, state, postal, country)
    VALUES ('ABC Hospital', 123, 1234567, '123 Main St', 'New York', 'NY', 10001, 'USA')";

    if(mysqli_query($conn, $sql)){
        
        echo "Data inserted into HosInfo table successfully!";
        
        
        // Insert data into PatInfo table
        $sql = "INSERT INTO PatInfo (hos_id, address, city, state, postal, country)
        VALUES (1, '456 Second St', 'San Francisco', 'CA', 94101, 'USA')";

        if(mysqli_query($conn, $sql)){
        echo "Data inserted into PatInfo table successfully!";
        } else {
        echo "Error: " . mysqli_error($conn);
        }

    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>