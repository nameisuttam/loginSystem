<?php
include 'connect.php';
function test_input($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = array();
    $id = test_input(($_POST['id']));
    $fname = test_input($_POST['fname']);
    $lname = test_input($_POST['lname']);
    $email = test_input($_POST['email']);
    $mobile = test_input($_POST['mobile']);
    $address = test_input($_POST['address']);
    $gender = test_input($_POST['gender']);
    $alldata = test_input($_POST['hobbies']);
    $city = test_input($_POST['city']);
    $state = test_input($_POST['state']);
    $joining = test_input($_POST['joining']);

    if (empty($fname)) {
        $error[] = "First name is required";
    } else {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $error[] = "Only letters and white space allowed";
        }
    }
    if (empty($lname)) {
        $error[] = "Last name is required";
    } else {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
            $error[] = "Only letters and white space allowed";
        }
    }
    if (empty($email)) {
        $error[] = "Email id is required";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error[] = "Invalid email format";
        }
    }
    if (empty($mobile)) {
        $error[] = "Mobile Number is required";
    } else {
        if (!preg_match("/^[0-9]{10}+$/", $mobile)) {
            $error[] = "Invalid Number";
        }
    }
    if (empty($address)) {
        $error[] = "Address is required";
    }
    if (empty($gender)) {
        $error[] = "Select gender";
    }
    if (!empty($_POST["hobbie"])) {
        foreach ($_POST["hobbie"] as $alldata) {
            // echo $error . '<br>';
        }
    } else {
        $error[] = "At least Select one";
    }
    if (empty($city)) {
        $error[] = "Please select city";
    }
    if (empty($state)) {
        $error[] = "Please select state";
    }
    if (empty($joining)) {
        $error[] = "Please fill the date";
    }
    $count = count($error);
}

if ($count > 0) {
    foreach ($error as $value) {
        echo $value . "<br>";
    }
} else {
        $alldata = implode(',', $_POST['hobbie']);
        $update = "UPDATE `login_system` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `mobile` = '$mobile', `address` = '$address', `gender` = '$gender', `hobbies` = '$alldata', `city` = '$city', `state` = '$state', `joining` = '$joining' WHERE `login_system`.`id` = '$id'";
        $result = mysqli_query($connect, $update);
        if ($result) {
            echo "Recored Successfully Updated";
        } else {
            echo mysqli_error($connect);
        }
    }

