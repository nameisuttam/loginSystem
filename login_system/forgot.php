<?php
include "connect.php";
session_start();
$token = rand(10000,100000);
$token = "qwertyuiopasdfghkjlzmncbvx1234567890";
$token = str_shuffle($token);
$token = substr($token, 0,6);

$email = $_POST['email'];
$sql = "SELECT email FROM login_system WHERE email = '$email'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Email not found";
    exit();
}else{
    if(isset($_POST['token'])){
        $token = $_POST['token'];
    }
   $update = "UPDATE `login_system` SET `token` = '$token' WHERE `login_system`.`email` = '$email'";
        $result = mysqli_query($connect, $update);
        if ($result) {
            echo "token is send successfully in your email";
        }
}
/*
$email = mysqli_real_escape_string($connect,$_POST['email']);

if ($email != "") {

    $query = "select count(*) as login_system from login_system where email='" . $email ;
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);

    $count = $row['login_system'];

    if ($count > 0) {
        $_SESSION['email'] = $email;
        echo 1;
    } else {
        echo 0;
    }
}
function test_input($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $error = array();
    $token = test_input($_POST['token']);
    $email = test_input($_POST['email']);
    if(empty($token)){
        $error[] = "Enter Token Number";
    }
    if(empty($email)){
        $error[] = "Email id is required.";
    }else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error[] = "Invalid email format";
        }
    }
    $count = count($error);
}
if ($count > 0) {
    foreach ($error as $value) {
        echo $value . "<br>";
    }
}else{

}

if(isset($_POST) & !empty($_POST)){
    $error = array();
    $email = $_POST['email'];
    $token = $_POST['token'];
    if(empty($email)){
        $error = "Email id is required";
    }
    if(empty($token)){
        $error = "Token is required";
    }
  }
*/




/*
$email = $_SESSION['email'];
if(isset($_POST['submit'])){
    $new_password = $_POST['npassword'];
}
// $new_password = $_POST['new_password'];
$email = mysqli_fetch_assoc($result)['email'];
$sql = "UPDATE login_system SET password = '$new_password' WHERE token = '$token'";
$result = mysqli_query($connect, $sql);
if($result){
    echo "Password successfully update";
}else{
    echo "Password not update";
}
/*
$sql = "UPDATE login_system set token = '$token' where email = '$email'";
mysqli_query($connect, $sql);

$reset_link = "forgot.php?token=$token";

$token = $_GET['token'];
$sql = "SELECT * FROM login_system WHERE token = '$token'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Invalid or expired token";
    exit();
}

function test_input($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = array();
    $email = mysqli_fetch_assoc($result)['email'];
    $token = test_input($_POST['token']);
    $newpassword = test_input($_POST["npassword"]);
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
    $sql = "SELECT token FROM login_system WHERE email='$email'";
    $result = mysqli_query($connect, $sql);
    if ($newpassword == $confirmnewpassword) {
        $sql = "UPDATE login_system set password='$newpassword' where email='$email'";
        $data = mysqli_query($connect, $sql);
        if($data){
            echo "Congratulation You have successfully changed your password";
        }else {
            echo "Password do not match";
        }
    } 
}
*/

?>
<?
/*
$new_password = $_POST['new_password'];
$email = mysqli_fetch_assoc($result)['email'];
echo $sql = "UPDATE login_system SET password = '$new_password' WHERE token = '$token'";
$result = mysqli_query($connect, $sql);
if($result){
    echo "Password successfully update";
}else{
    echo "Password not update";
}
*/
?>