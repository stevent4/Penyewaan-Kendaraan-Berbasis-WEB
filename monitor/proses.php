<?php
error_reporting(0);
require_once "../_config/config.php";

if (isset($_POST['tambah'])) {
    $bulan = $_POST['bulan'];
    $bbm = $_POST['bbm'];
    $berapa = $_POST['berapa'];
    $sql = mysqli_query($con, "INSERT INTO tb_pemakaian VALUES ('','$bulan',$bbm,'$berapa')");
    if ($sql) {
        echo "<script>alert('" . " data berhasil ditambahkan'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal tambah data, coba lagi'); window.location='add.php';</script>";
    }
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $bulan = $_POST['bulan'];
    $bbm = $_POST['bbm'];
    $berapa = $_POST['berapa'];
    mysqli_query($con, "UPDATE tb_pemakaian SET bulan = '$bulan', bbm = '$bbm', berapa = '$berapa' WHERE id = '$id'") or die(mysqli_error($con));

    echo "<script>alert('Data berhasil disimpan'); window.location='index.php';</script>";
}