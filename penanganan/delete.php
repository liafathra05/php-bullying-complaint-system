<?php
require_once "../_config/config.php";

mysqli_query($con, "DELETE FROM penanganan WHERE id_penanganan= '$_GET[id_penanganan]'") or die (mysqli_error($con));
echo "<script>window.location='index.php';</script>";

?>