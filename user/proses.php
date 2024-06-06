<?php
require_once "../_config/config.php";

if(isset($_POST['create'])) {
    mysqli_query($con, "INSERT INTO user SET
    id_user = '$_POST[id]',
    nama_user = '$_POST[nama]',
    peran = '$_POST[peran]'");
    echo "Data User Telah Tersimpan";
    echo "<script>window.location='index.php';</script>";
} else if(isset($_POST['update'])){
    $id_user = $_POST["id"];
    $nama = $_POST["nama"];
    $peran = $_POST["peran"];

    $query = "UPDATE user SET nama_user = '$nama', peran = '$peran' WHERE id_user = '$id_user'";
    $hasil = mysqli_query($con, $query);
    if($hasil){
        echo "Data User Berhasil Diupdate";
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "Data User Gagal Diupdate";
    }
}
?>