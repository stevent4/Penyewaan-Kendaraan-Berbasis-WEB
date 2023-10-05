<?php
error_reporting(0);
require_once "../_config/config.php";

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $servis = $_POST['servis'];
    $status = $_POST['status'];
    $sql = mysqli_query($con, "INSERT INTO tb_kendaraan VALUES ('','$nama','$merk','$jenis','$servis','$status')");
    if ($sql) {
        echo "<script>alert('" . " data berhasil ditambahkan'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal tambah data, coba lagi'); window.location='add.php';</script>";
    }
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $servis = $_POST['servis'];
    $status = $_POST['status'];
    mysqli_query($con, "UPDATE tb_kendaraan SET nama_kendaraan = '$nama', merk_kendaraan = '$merk', jenis_kendaraan = '$jenis', servis ='$servis', status = '$status' WHERE id = '$id'") or die(mysqli_error($con));

    echo "<script>alert('Data berhasil disimpan'); window.location='index.php';</script>";
}
