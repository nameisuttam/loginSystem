<style></style>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>User Registration Page</title>
</head>

<body>
<!-- <ul>
  <li><a class="active" href="index.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
  <li><a href="forgot_password.php">Forgot/Change Password</a></li>
</ul> -->

<form id="userForm" method="POST">
<?php include "header.php"; ?>
    <div class="center">
    <h2 class="text2"><u>Registration Page</u></h2>
    <p class="error" id="msg"></p>
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname" id="fname"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lname" id="lname"></td>
            </tr>
            <tr>
                <td>Email ID</td>
                <td><input type="email" name="email" id="email"></td>
                <div id="exists"></div>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="mobile" name="mobile" id="mobile"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" col="30" rows="4" id="address"></textarea>
                </td>
            </tr>
            <tr>
                <td>gender</td>
                <td><input type="radio" name="gender" value="male" id="gender[]">Male
                    <input type="radio" name="gender" value="female" id="gender[]">Female
                    <input type="radio" name="gender" value="other" id="gender[]">Other
                </td>
            </tr>
            <tr>
                <td>Hobbies</td>
                <td><input type="checkbox" name="hobbie[]" value="cricket" id="hobbie1">Cricket
                    <input type="checkbox" name="hobbie[]" value="football" id="hobbie2">Football
                    <input type="checkbox" name="hobbie[]" value="reading" id="hobbie3">Reading
                    <input type="checkbox" name="hobbie[]" value="programming" id="hobbie4">Programming
                </td>
            </tr>
            <tr>
                <td>State</td>
                <td>
                    <select name="state" id="state">
                        <option selected disabled hidden><a class="text2">Select state</a></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                    <select id="city" name="city">
                        <option selected disabled hidden><a class="text2">Select City</a></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Joining Date</td>
                <td><input type="date" name="joining" id="joining"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" id="password"></td>
            </tr>
        </table>
        </br><br><br>
        <button class="button" type="submit" name="submit" value="Submit">Submit</button>
        </div>
        <?php include "footer.php"; ?>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="ajax-script.js"></script>
    
</body>