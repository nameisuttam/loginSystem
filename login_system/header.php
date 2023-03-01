<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<form action="_blanck">
<?php
if ((isset($_SESSION['email']) && $_SESSION['passwaord'] == '')) {
            echo '<ul>
                    <li><a style="color:black;" class="active" href="home.php">Home</a></li>
                    <li><a style="color:black;" href="changepass_form.php">Change Password</a></li>
                    <li><a style="color:black;" href="update_form.php?id=' . $id . '">Edit data</a></li>
                    <li class="nav navbar-nav navbar-right" ><a style="color:red;" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>';     
    }else{
        echo '<ul>
                <li><a class="active" style="color:black;" href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="forgot_password.php">Forgot/Change Password</a></li>
                <li><a href="new_password.php?token=&email=">New Password</a></li>
            </ul>';
    }
?>
</body>
</html>