<?php
require_once "../_config/config.php";

if(isset($_POST['create'])) {
    mysqli_query($con, "INSERT INTO konsultasi SET
    id_konsultan = '$_POST[id]',
    nama_konsultan = '$_POST[nama]',
    spesialis = '$_POST[spesialis]'");
    echo "<script>window.location='index.php';</script>";
} else if(isset($_POST['update'])){
    $id_konsultan = $_POST["id"];
    $nama = $_POST["nama"];
    $spesialis = $_POST["spesialis"];

    $query = "UPDATE konsultasi SET nama_konsultan = '$nama', spesialis = '$spesialis' WHERE id_konsultan = '$id_konsultan'";
    $hasil = mysqli_query($con, $query);
    if($hasil){
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "Data User Gagal Diupdate";
    }
}
?>