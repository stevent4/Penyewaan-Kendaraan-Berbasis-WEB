<?php
error_reporting(0);
require_once "../_config/config.php";

$id = $_GET['id'];

$sql = mysqli_query($con, "DELETE FROM tb_kendaraan WHERE id='" . $_GET['id'] . "'");

if ($sql) {
    echo "<script>alert('Berhasil Menghapus')</script>";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
