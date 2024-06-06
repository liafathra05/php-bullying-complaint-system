<?php
require_once "../_config/config.php";

unset($_SESSION['username']);
echo "<script>window.location=\"login.php\";</script>";
?>