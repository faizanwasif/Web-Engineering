<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hos_strt_add = $_POST["hos_strt_add"];
        $hos_city = $_POST["hos_city"];
        $hos_postal = $_POST["host_postal"];
        $hos_country = $_POST["hos_country"];
        $state = $_POST["hos_state"];
        $address_line_1 = $_POST["address_line_1"];
        $address_line_2 = $_POST["address_line_2"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $postal = $_POST["postal"];
        $country = $_POST["country"];
        $ph_code = $_POST["ph_code"];
        $ph_num = $_POST["ph_num"];
    
        $fname = test_input($_POST["fname"]);
        $mname = test_input($_POST["mname"]);
        $lname = test_input($_POST["lname"]);

        $error = "";

        $name_pattern = "/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/";
    
        $code_pattern = "/^\d{3}$/";
        $num_pattern = "/^\d{7}$/";
    
        $city_pattern = "/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/";
        $state_pattern = "/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/";
        $postal_pattern = "/^[0-9]+$/";
        
        $city_pattern = "/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/";
        $state_pattern = "/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/";
        $postal_pattern = "/^[0-9]+$/";

        
        if (empty($hos_strt_add)) {
            $error .= "Street Address is required.<br>";
        }

        
        if (empty($state) || !preg_match($state_pattern, $state)) {
            $errors .= "Please enter a valid state name.<br>";
        }

        if (empty($hos_city) || !preg_match($city_pattern, $city)) {
            $error .= "Please enter a valid city name.<br>";
        }
        if (empty($hos_postal) || !preg_match($postal_pattern, $postal)) {
            $error .= "Enter Valid Value for Postal/Zip.<br>";
        }
        if (empty($hos_country)) {
            $error .= "Country is required.<br>";
        }

               

        if (empty($city) || !preg_match($city_pattern, $city)) {
            $error .= "Please enter a valid pat city name.<br>";
        }

        if (empty($state) || !preg_match($state_pattern, $state)) {
            $errors .= "Please enter a valid pat state name.<br>";
        }

        if (empty($postal) || !preg_match($postal_pattern, $postal)) {
            $error .= "Enter Valid Value for pat Postal/Zip.<br>";
        }


        if (empty($ph_code) || !preg_match($code_pattern, $ph_code)) {
            $error .= "Please enter a valid area code (3 digits).<br>";
        }
    
        if (empty($ph_num) || !preg_match($num_pattern, $ph_num)) {
            $error .= "Please enter a valid phone number (7 digits).<br>";
        }

        if (empty($fname) || !preg_match($name_pattern, $fname)) {
            $error .= "Please enter a valid first name.<br>";
        }
    
        if (!empty($mname) && !preg_match($name_pattern, $mname)) {
            $error .= "Please enter a valid middle name.<br>";
        }
    
        if (empty($lname) || !preg_match($name_pattern, $lname)) {
            $error .= "Please enter a valid last name.<br>";
        }
    

        if ($error != "") {

            echo "<div style='color:red'>$error</div>";
        } else {
            echo "<div style='color:green'>Validation successful!</div>";
        }
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
