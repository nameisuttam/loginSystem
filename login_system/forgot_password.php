<?php
include "connect.php";
/*
// $token = $_GET['token'];
$query = "SELECT * FROM login_system";
$result = mysqli_query($connect, $query);
// $total = mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result)) {
    $token = $row['token'];
}
$email = $_SESSION['email'];
// $token = $_GET['token'];
$display = "select email,token from login_system where email ='" . $_SESSION['email'] . "'";
if ($result = mysqli_query($connect, $display)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $email = $row['email'];
        $token = $row['token'];
    }
} else {
    mysqli_error($connect);
}
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <!-- <ul>
        <li><a class="active" href="index.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
        <li><a href="new_password.php?token=&email=">New Password</a></li>
        <li class="nav navbar-nav navbar-right"><a style="color:black;" href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul> -->
    <form method="post" id="forgot">
    <?php include "header.php"; ?>
    <div class="center">
    <h2 class="text"><u>Forgot Password</u></h2>
            <table>
                <p class="text2" id="msg"></p>
                <tr>
                    <td>Enter Email Id: </td>
                    <td><input type="text" id="email" name="email"></td>
            </table>
            <br><br>
            <input type="submit" value="submit"> 
            <?php include "footer.php" ?>
        </form>
            <script type="text/javascript" src="ajax-script.js"></script>
            </div>
</body>

</html>
