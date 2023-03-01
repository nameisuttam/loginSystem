<?php
include 'connect.php';
/*
$email = $_SESSION['email'];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];
$sql = "SELECT password FROM login_system WHERE email='$email'";
$result = mysqli_query($connect, $sql);
if ($newpassword == $confirmnewpassword) {
    $sql = "UPDATE login_system set password='$newpassword' where email='$email'";
    $data = mysqli_query($connect, $sql);
    echo "Congratulation You have successfully changed your password";
} else {
    echo "Password do not match";
}
*/
$email = $_SESSION['email'];
function test_input($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = array();
    $password = test_input($_POST['password']);
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
}else{
    $sql = "SELECT password FROM login_system WHERE email='$email'";
    $result = mysqli_query($connect, $sql);
    if ($newpassword == $confirmnewpassword) {
        $sql = "UPDATE login_system set password='$newpassword' where email='$email'";
        $data = mysqli_query($connect, $sql);
        echo "Congratulation You have successfully changed your password";
    } else {
        echo "Password do not match";
    }
}
?>

