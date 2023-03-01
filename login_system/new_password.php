<?php

include 'connect.php';
// $email = $_GET['email'];
// echo $_GET['token'];
// echo $query = "SELECT * FROM login_system WHERE email = $email";
// $result = mysqli_query($connect, $query);
// while ($row = mysqli_fetch_array($result)) {
//     $token = $row['token'];
// }
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
    <title>new password</title>
</head>

<body>
    <form action="#" method="POST" id="newPassword">
    <?php include "header.php"; ?>
        <div class="center">
        <p class="text2" id="msg"></p>
        <table>
            <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
            <tr>
                <td>New Password:</td>
                <td><input type="text" name="newpassword" id="newpassword"></td>
            </tr>
            <tr>
                <td>Re-enter new password:</td>
                <td><input type="text" name="confirmnewpassword" id="confirmnewpassword"></td>
            </tr>
        </table>
        <br><br>
        <input type="submit" value="submit">
        </div>
        <?php include "footer.php"; ?>
    </form>
    <script src="ajax-script.js"></script>
</body>

</html>