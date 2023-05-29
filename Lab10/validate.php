<?php
    // define variables and set to empty values
    $street_address = $street_address_line2 = $city = $state_province = $country = "";
    $street_address_err = $city_err = $state_province_err = $country_err = "";

    $phone_area_code_err = $phone_number_err = $chart_number_err = $reg_clerk_id_err = "";
$phone_area_code = $phone_number = $chart_number = $reg_clerk_id = "";

    // define function to test input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // validate street address
    if (empty($_POST["street_address"])) {
        $street_address_err = "Street address is required";
    } else {
        $street_address = test_input($_POST["street_address"]);
    }

    // validate city
    if (empty($_POST["city"])) {
        $city_err = "City is required";
    } else {
        $city = test_input($_POST["city"]);
    }

    // validate state/province
    if (empty($_POST["state_province"])) {
        $state_province_err = "State/province is required";
    } else {
        $state_province = test_input($_POST["state_province"]);
    }

    // validate country
    if (empty($_POST["country_selection"])) {
        $country_err = "Country is required";
    } else {
        $country = test_input($_POST["country_selection"]);
    }

    // if no errors, display submitted data
    if(empty($street_address_err) && empty($city_err) && empty($state_province_err) && empty($country_err)){
        echo "Street Address: " . $street_address . "<br>";
        echo "Street Address Line 2: " . $street_address_line2 . "<br>";
        echo "City: " . $city . "<br>";
        echo "State/Province: " . $state_province . "<br>";
        echo "Country: " . $country . "<br>";
    } else {
        // display error messages
        echo $street_address_err . "<br>";
        echo $city_err . "<br>";
        echo $state_province_err . "<br>";
        echo $country_err . "<br>";
    }

    if (empty($_POST["area_code"])) {
        $area_code_err = "Please enter an area code.";
    } else if (!is_numeric($_POST["area_code"])) {
        $area_code_err = "Area code should only contain numbers.";
    } else {
        $area_code = test_input($_POST["area_code"]);
    }

// validate phone area code
if (empty($_POST["phone_area_code"])) {
    $phone_area_code_err = "Please enter the area code.";
} else {
    $phone_area_code = test_input($_POST["phone_area_code"]);
    // check if phone area code contains only numbers
    if (!preg_match("/^[0-9]*$/",$phone_area_code)) {
        $phone_area_code_err = "Only numbers are allowed in area code.";
    }
}

// validate phone number
if (empty($_POST["phone_number"])) {
    $phone_number_err = "Please enter the phone number.";
} else {
    $phone_number = test_input($_POST["phone_number"]);
    // check if phone number contains only numbers
    if (!preg_match("/^[0-9]*$/",$phone_number)) {
        $phone_number_err = "Only numbers are allowed in phone number.";
    }
}

// validate chart number
if (empty($_POST["chart_number"])) {
    $chart_number_err = "Please enter the chart number.";
} else {
    $chart_number = test_input($_POST["chart_number"]);
    // check if chart number contains only numbers and letters
    if (!preg_match("/^[a-zA-Z0-9]*$/",$chart_number)) {
        $chart_number_err = "Only letters and numbers are allowed in chart number.";
    }
}

// validate registration clerk id
if (empty($_POST["reg_clerk_id"])) {
    $reg_clerk_id_err = "Please enter the registration clerk ID.";
} else {
    $reg_clerk_id = test_input($_POST["reg_clerk_id"]);
    // check if registration clerk ID contains only numbers and letters
    if (!preg_match("/^[a-zA-Z0-9]*$/",$reg_clerk_id)) {
        $reg_clerk_id_err = "Only letters and numbers are allowed in registration clerk ID.";
    }
}

?>
