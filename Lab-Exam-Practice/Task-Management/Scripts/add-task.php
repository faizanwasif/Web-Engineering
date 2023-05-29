<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "../db.php";
    session_start();

    if(isset($_POST['name']) && $_POST['desc'] && $_POST['due'])
    {
    //Data validation
        if(isset($_POST['name']) && $_POST['desc'] && $_POST['due'])
        {
        //Data validation
        if ( strlen($_POST['name']) < 1 || strlen($_POST['desc']) < 1 || strlen($_POST['due']) < 1) {
            $_SESSION['error'] = 'Missing data';
            header("Location: ../Pages/task-list.php");
            return;
        }

            $sql = "INSERT INTO tasks (name, description, due_date, status, user_id)
                VALUES (?, ?, ?, 'Incomplete', 1)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $_POST['name'], $_POST['desc'], $_POST['due']);
            $stmt->execute();
            $_SESSION['success'] = 'Record Added';
            header('Location: ../Pages/task-list.php');
            return;
        }




        
    }

    // Flash pattern
    if ( isset($_SESSION['error']) ) {
        echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
        unset($_SESSION['error']);
    }


?>