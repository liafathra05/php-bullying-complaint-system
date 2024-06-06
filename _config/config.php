<?php
//setting default timezone
date_default_timezone_set('Asia/jakarta');

session_start();

//koneksi
$con = mysqli_connect('localhost', 'root', '', 'db_bullying');
if(mysqli_connect_error()){
    echo mysqli_connect_error();
}

?>