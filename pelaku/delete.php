<?php
require_once "../_config/config.php";

mysqli_query($con, "DELETE FROM pelaku WHERE id_pelaku= '$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='index.php';</script>";

?>