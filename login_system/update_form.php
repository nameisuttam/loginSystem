<?php
include 'connect.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");
}

$id = $_GET['id'];
$query = "SELECT * FROM login_system WHERE id=$id";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $address = $row['address'];
    $gender = $row['gender'];
    $hobbie = $row['hobbies'];
    $alldata = explode(",", $hobbie);
    $city = $row['city'];
    $state = $row['state'];
    $joining = $row['joining'];
    $password = $row['password'];
}

?>
<style></style>
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
    <title>Update data</title>
</head>

<body>
    <!-- <ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="changepass_form.php">Change Password</a></li>
        <li class="nav navbar-nav navbar-right"><a style="color:red;" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
        <li class="nav navbar-nav navbar-right"><a style="color:black;" href="registration.php"><span class="glyphicon glyphicon-user"></span>sign up</a></li>
    </ul> -->
    <form id="updateForm" method="POST" action="#">
        <?php include "header.php"; ?>
        <div class="center">
            <h2><u class="text2">Update Data</u></h2>
            <p class="error" id="message"></p>

            <table>
                <tr>
                    <td><input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname" id="fname" value="<?php echo $fname; ?>"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname" id="lname" value="<?php echo $lname; ?>"></td>
                </tr>
                <tr>
                    <td>Email ID</td>
                    <td><input type="text" name="email" id="email" value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="mobile" name="mobile" id="mobile" value="<?php echo $mobile; ?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="address" cols="30" rows="4" id="address" value="<?php echo $address; ?>"><?php echo $address ?></textarea></td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td>
                        <?php
                        $gender1 = array('male', 'female', 'other');
                        foreach ($gender1 as $value) { ?>
                            <input type='radio' name='gender' id='gender' value=<?php echo $value; ?> <?php if ($value == $gender) echo 'checked="checked"' ?>><?php echo $value;
                                                                                                                                                            } ?>
                    </td>
                </tr>
                <tr>
                    <td>Hobbies</td>
                    <td>
                        <?php
                        $Hobbies = array('cricket', 'football', 'reading', 'programming');
                        foreach ($Hobbies as $Hobbi) { ?>
                            <input type='checkbox' name='hobbie[]' id="hobbies" value=<?php echo $Hobbi; ?> <?php if (in_array($Hobbi, $alldata)) echo 'checked="checked"' ?>><?php echo $Hobbi;
                                                                                                                                                                            } ?>
                    </td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>
                        <input type="hidden" id="state_val_id" value="<?php echo $state ?>">
                        <select name="state" id="state">
                            <option selected disabled hidden>Select State</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>
                        <input type="hidden" id="city_val_id" value="<?php echo $city ?>">
                        <select id="city" name="city">
                            <option selected disabled hidden>Select City</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Joining Date</td>
                    <td><input type="date" name="joining" value="<?php echo $joining ?>"></td>
                </tr>
                <!-- <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" value="<?php echo $password ?>"></td>
                </tr> -->
            </table>
            </br><br><br>
            <button class="button" type="submit" name="update" id="update">Update</button>
    </div>
    <?php include "footer.php"; ?>
    </form>
    <script type="text/javascript" src="ajax-script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>