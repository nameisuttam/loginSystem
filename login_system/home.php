<?php
include "connect.php";
if(!isset($_SESSION['email'])){
    header("location:index.php");
}

// if (!isset($_SESSION['email'])) {
//     header('Location: http://192.168.29.77/ex3/login_system/home.php');
// }
$email = $_SESSION['email'];
$display = "select id,fname,lname from login_system where email ='" . $_SESSION['email'] . "'";
if ($result = mysqli_query($connect, $display)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
    }
} else {
    mysqli_error($connect);
}

?>
<!doctype html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="_blanck">
        <?php include "header.php"; ?>
            <div class="center">
            <p id="msg"></p>
            <h1><u>Homepage</u></h1>

            <h1 class="text2">Welcome </h1>
            <h2 style="color:orangered"><?php echo "$fname ", "$lname"; ?></h2>
        </div>
    </form>
    <?php include "footer.php"; ?>
</body>

</html>

