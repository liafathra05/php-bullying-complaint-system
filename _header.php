<?php
require_once "_config/config.php";
if(!isset($_SESSION['username'])) {
    echo "<script>window.location=\"../auth/login.php\";</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aplikasi Pengaduan Bullying</title>
    <!-- Bootstrap Core CSS -->
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../_assets/css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
    <script src="../_assets/js/jquery.js"></script>
    <script src="../_assets/js/bootstrap.min.js"></script>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary"><b>Pengaduan Bullying</b></span></a>
                </li>
                <li>
                    <a href="../dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="../user/index.php">Data User</a>
                </li>
                <li>
                    <a href="../pelaku/index.php">Data Pelaku</a>
                </li>
                <li>
                    <a href="../insiden/index.php">Data Insiden</a>
                </li>
                <li>
                    <a href="../konsultasi/index.php">Data Konsultan</a>
                </li>
                <li>
                    <a href="../penanganan/index.php">Data Penanganan</a>
                </li>
                <li>
                    <a href="../auth/logout.php"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">

