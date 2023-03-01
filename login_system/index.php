<?php
include 'connect.php';
if(isset($_SESSION['email'])){
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<body>
        <form id="loginUser" action="_blanck">
            <?php include "header.php"; ?>
            <div class="center">
                <h2 class="text2"><u>Login Page</u></h2>
            <p class="text2" id="msg"></p>
            <table class="center2">
                <tr>
                    <td>Email ID: </td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
            </table>
            <br><br>
            <input type="submit" class="button" id="submit" name="submit" value="Login">
            <?php include "footer.php"; ?>
        </form>
        <script type="text/javascript" src="ajax-script.js"></script>
</div>
</body>

</html>