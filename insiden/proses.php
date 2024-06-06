<?php
require_once "../_config/config.php";

if(isset($_POST['create'])) {
    mysqli_query($con, "INSERT INTO insiden SET
    id_user = '$_POST[id]',
    nama_korban = '$_POST[nama]',
    id_ins = '$_POST[id_insiden]',
    deskripsi = '$_POST[deskripsi]',
    tgl_insiden = '$_POST[tanggal]'");
    echo "<script>window.location='index.php';</script>";
} else if(isset($_POST['update'])){
    $id_user = $_POST["id"];
    $nama = $_POST["nama"];
    $id_insiden = $_POST["id_insiden"];
    $deskripsi = $_POST["deskripsi"];
    $tanggal = $_POST["tanggal"];

    $query = "UPDATE insiden SET nama_korban = '$nama', deskripsi = '$deskripsi', tgl_insiden = '$tanggal' WHERE id_user = '$id_user' AND id_ins = '$id_insiden'";
    $hasil = mysqli_query($con, $query);
    if($hasil){
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "Data User Gagal Diupdate";
    }
}
?>