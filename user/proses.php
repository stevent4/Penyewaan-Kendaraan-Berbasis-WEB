<?php
error_reporting(0);
require_once "../_config/config.php";

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $jabatan = $_POST['jabatan'];
    $sql = mysqli_query($con, "INSERT INTO tb_user VALUES ('','$nama','$username','$password','$level','$jabatan')");
    if ($sql) {
        echo "<script>alert('" . " data berhasil ditambahkan'); window.location='user.php';</script>";
    } else {
        echo "<script>alert('Gagal tambah data, coba lagi'); window.location='data.php';</script>";
    }
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $jabatan = $_POST['jabatan'];
    mysqli_query($con, "UPDATE tb_user SET nama_user = '$nama', username = '$username', password = '$password', level = '$level', jabatan = '$jabatan' WHERE id_user = '$id'") or die(mysqli_error($con));

    echo "<script>alert('Data berhasil disimpan'); window.location='user.php';</script>";
}
