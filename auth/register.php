<?php
require_once "../_config/config.php";


$con = mysqli_connect('localhost', 'root', '', 'db_bullying');
    if(isset($_POST['register'])){
        $fullname = trim(mysqli_real_escape_string($con, $_POST['fullname']));
        $username = trim(mysqli_real_escape_string($con, $_POST['username']));
        $email = trim(mysqli_real_escape_string($con, $_POST['email']));
        $pass = trim(mysqli_real_escape_string($con, $_POST['password']));
        $sql_register = "INSERT INTO register (fullname, username, email, password) VALUES ('$fullname', '$username', '$email', '$pass')" or die (mysqli_error($con));
        if(mysqli_query($con, $sql_register) > 0) {
        $_SESSION['fullname'] = $fullname;
        echo "<script>window.location='login.php';</script>";
    } else {}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <title>Register Page</title>
    <!-- Bootstrap Core CSS -->
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div class="input">
                <form action="" method="post" class="navbar-form">
                    <div class="box-input">
                        <i class="glyphicon glyphicon-pencil"></i>
                        <input type="text" name="fullname" placeholder=" Fullname" required autofocus>
                    </div>
                    <div class="box-input">
                        <i class="glyphicon glyphicon-user"></i>
                        <input type="text" name="username" placeholder=" Username" required>
                    </div>
                    <div class="box-input">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <input type="text" name="email" placeholder=" Email" required>
                    </div>
                    <div class="box-input">
                        <i class="glyphicon glyphicon-lock"></i>
                        <input type="password" name="password" placeholder=" Password" required>
                    </div>
                    <div class="box-input">
                        <button type="submit" name="register" class="btn-input" value="Register">Register</button>
                    </div>
                    <div class="bottom" style="margin-top: 10px;">
                        <p>
                            <span style="font-size: 15px; color: white;" >Sudah punya akun?<a href="login.php"><span style="color: lightgreen; text-decoration: underline;"> Login disini</span></a></span>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../_assets/js/jquery.js"></script>
    <script src="../_assets/js/bootstrap.min.js"></script>
</body>
</html>