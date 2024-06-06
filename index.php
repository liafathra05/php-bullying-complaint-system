<?php
require_once "_config/config.php";
if(isset($_SESSION['username'])) {
    echo "<script>window.location=\"dashboard\";</script>";
} else {
    echo "<script>window.location=\"auth/login.php\";</script>";
}
?>
