<?php
include 'connect.php';
$db = $connect;
function test_input($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = array();
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
    $password = test_input($_POST['password']);

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
    if(empty($joining)){
        $error[] = "Please fill the date";
    }
    if(empty($password)){
        $error[] = "Please enter password";
    }else{
        if (strlen($_POST["password"]) < '8') {
            $error[] = "Your Password Must Contain At Least 8 Characters!";
        }
        else if (!preg_match("#[0-9]+#", $password)) {
            $error[] = "Your Password Must Contain At Least 1 Number!";
        }else if (!preg_match("#[A-Z]+#", $password)) {
            $error[] = "Your Password Must Contain At Least 1 Capital Letter!";
        }
    }
    $count = count($error);
}

if ($count > 0) {
    foreach ($error as $value) {
        echo $value . "<br>";
    }
} else {
   $checkEmail = "SELECT * FROM login_system WHERE email = '$email'";
    $query = mysqli_query($connect, $checkEmail);
    $data = mysqli_fetch_array($query, MYSQLI_NUM);

    if ($data[0] > 0) {
        echo "Email Id already registered. Input a different email";
        exit();

    } else {

        $alldata = implode(',', $_POST['hobbie']);
        $mysqli = "INSERT INTO `login_system` (`fname`, `lname`, `email`, `mobile`, `address`, `gender`, `hobbies`,`city`,`state`,`joining`,`password`) VALUES ('$fname', '$lname', '$email', '$mobile', '$address', '$gender', '$alldata','$city','$state','$joining','$password');";
        $result = mysqli_query($connect, $mysqli);
        if ($result) {
            // header("location:index.php");
            echo "data inserted successfully";
        } else {
            die(mysqli_error($connect));
        }
    }

}
