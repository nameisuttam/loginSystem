<?php
include "connect.php";
$email = $_SESSION['email'];
$query = "select id,fname,lname from login_system where email ='" . $_SESSION['email'] . "'";
if ($result = mysqli_query($connect, $query)) {
  while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $fname = $row['fname'];
      $lname = $row['lname'];
  }
} else {
  mysqli_error($connect);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Change Password</title>
</head>

<body>
  <form id="change_password" method="post">
    <?php include "header.php"; ?>
    <div class="center">
    <h2 class="text2"><u>Change Your Password</u></h2>
    <br>
        <p class="text2" id="msg"></p>
        <table class="center2">
          <input type="hidden" name="email" id="email" value="<?php echo $email; ?>"></input>
          <tr>
            <td>Enter your password:</td>
            <td><input type="password" size="10" name="password"></td>
          </tr>
          <tr>
            <td>Enter new password:</td>
            <td><input type="password" size="10" name="newpassword"></td>
          </tr>
          <tr>
            <td>Re-enter new password:</td>
            <td><input type="password" size="10" name="confirmnewpassword"></td>
          </tr>
        </table>
        <br><br>
        <input type="submit" value="Update Password">
        </div>
        <?php include "footer.php"; ?>
      </form>
      <script type="text/javascript" src="ajax-script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>