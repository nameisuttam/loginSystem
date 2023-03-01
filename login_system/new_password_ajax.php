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
    $token = test_input(($_POST['token']));
    $email = test_input(($_POST['email']));
    $newpassword = test_input($_POST["newpassword"]);
    $confirmnewpassword = test_input($_POST["confirmnewpassword"]);
    if (empty($newpassword) && ($newpassword == $confirmnewpassword)) {   
        $error[] = "Please enter password";
    }else{
        if (strlen($_POST["newpassword"]) < '8') {
            $error[] = "Your Password Must Contain At Least 8 Characters!";
        } else if (!preg_match("#[0-9]+#", $newpassword)) {
            $error[] = "Your Password Must Contain At Least 1 Number!";
        } else if (!preg_match("#[A-Z]+#", $newpassword)) {
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
    $update = "UPDATE `login_system` SET `password` = '$newpassword' WHERE `login_system`.`token` = '$token' and `login_system`.`email` = '$email'";
        $result = mysqli_query($connect, $update);
        if ($result) {
            $query = "UPDATE `login_system` SET `token` = NULL WHERE `login_system`.`email` = '$email'";
        $res = mysqli_query($connect, $query);
        echo "Password Change Successfully";
        } else {
            echo mysqli_error($connect);
        }
    }


?>