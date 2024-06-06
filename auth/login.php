<?php
require_once "../_config/config.php";
if(isset($_SESSION['username'])) {
    echo "<script>window.location='../index.php';</script>";
} else {
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
    <title>Login Page</title>
    <!-- Bootstrap Core CSS -->
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">
 </head>
<body>
        <div class="input">
            <h1>LOGIN</h1>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'db_bullying');
                if(isset($_POST['login'])){
                    $username = trim(mysqli_real_escape_string($con, $_POST['username']));
                    $pass = (trim(mysqli_real_escape_string($con, $_POST['password'])));
                    $sql_login = mysqli_query($con, "SELECT * FROM register WHERE username = '$username' AND password = '$pass'") or die (mysqli_error($con));
                    if(mysqli_num_rows($sql_login) > 0) {
                        $_SESSION['username'] = $username;
                        echo "<script>window.location='../index.php';</script>";
                    } else { ?>
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <strong>Login gagal!</strong> Username / password salah
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                }
                ?>
                <form action="" method="post" class="navbar-form">
                    <div class="box-input">
                        <i class="glyphicon glyphicon-user"></i>
                        <input type="text" name="username" placeholder=" Username" required autofocus>
                    </div>
                    <div class="box-input">
                        <i class="glyphicon glyphicon-lock"></i>
                        <input type="password" name="password" placeholder=" Password" required>
                    </div>
                    <div class="box-input">
                        <button type="submit" name="login" class="btn-input" value="Login">Login</button>
                    </div>
                    <div class="bottom" style="margin-top: 10px;">
                        <p>
                            <span style="font-size: 15px; color: white;" >Belum punya akun?<a href="register.php"><span style="color: lightgreen; text-decoration: underline;"> Register disini</span></a></span>
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
<?php
}
?>
