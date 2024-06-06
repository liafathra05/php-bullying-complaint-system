<?php
require_once "../_config/config.php";

if(isset($_POST['create'])) {
    mysqli_query($con, "INSERT INTO pelaku SET
    id_pelaku = '$_POST[id_pelaku]',
    nama_pelaku = '$_POST[nama]',
    id_ins = '$_POST[id_insiden]'");
    echo "<script>window.location='index.php';</script>";
} else if(isset($_POST['update'])){
    $id_pelaku = $_POST["id_pelaku"];
    $nama_pelaku = $_POST["nama"];
    $id_insiden = $_POST["id_insiden"];

    $query = "UPDATE pelaku SET nama_pelaku = '$nama_pelaku' WHERE id_pelaku = '$id_pelaku' AND id_ins = '$id_insiden'";
    $hasil = mysqli_query($con, $query);
    if($hasil){
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "Data User Gagal Diupdate";
    }
}
?>