<?php
require_once "../_config/config.php";

if(isset($_POST['create'])) {
    mysqli_query($con, "INSERT INTO penanganan SET
    id_penanganan = '$_POST[id_penanganan]',
    jenis_penanganan = '$_POST[jenis]',
    tgl_penanganan = '$_POST[tanggal]',
    id_konsultan = '$_POST[id_konsultan]',
    kondisi = '$_POST[kondisi]',
    id_ins = '$_POST[id_insiden]',
    status = '$_POST[status]'");
    echo "<script>window.location='index.php';</script>";
} else if(isset($_POST['update'])){
    $id_penanganan = $_POST["id_penanganan"];
    $jenis = $_POST["jenis"];
    $tanggal = $_POST["tanggal"];
    $id_konsultan = $_POST["id_konsultan"];
    $kondisi = $_POST["kondisi"];
    $id_insiden = $_POST["id_insiden"];
    $status = $_POST["status"];

    $query = "UPDATE penanganan SET jenis_penanganan = '$jenis', tgl_penanganan = '$tanggal', kondisi = '$kondisi', status = '$status' WHERE id_penanganan = '$id_penanganan' AND id_ins = '$id_insiden' AND id_konsultan = '$id_konsultan'";
    $hasil = mysqli_query($con, $query);
    if($hasil){
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "Data User Gagal Diupdate";
    }
}
?>