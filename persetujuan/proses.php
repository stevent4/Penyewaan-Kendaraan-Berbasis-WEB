<?php
error_reporting(0);
require_once "../_config/config.php";

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $driver = $_POST['driver'];
    $penyetuju = $_POST['penyetuju'];
    $jabatan = $_POST['jabatan'];
    $persetujuan = $_POST['persetujuan'];
    $pinjam = $_POST['pinjam'];
    $kembali = $_POST['kembali'];
    $keterangan = $_POST['keterangan'];
    $sql = mysqli_query($con, "INSERT INTO tb_penyewa VALUES ('','$nama','$merk','$jenis','$driver','$penyetuju','$jabatan','$persetujuan','$pinjam','$kembali','$keterangan')");
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
    $driver = $_POST['driver'];
    $penyetuju = $_POST['penyetuju'];
    $jabatan = $_POST['jabatan'];
    $persetujuan = $_POST['persetujuan'];
    $pinjam = $_POST['pinjam'];
    $kembali = $_POST['kembali'];
    $keterangan = $_POST['keterangan'];

    mysqli_query($con, "UPDATE tb_penyewa SET nama_kendaraan = '$nama', merk_kendaraan = '$merk', jenis_kendaraan = '$jenis', driver = '$driver', penyetuju = '$penyetuju', jabatan = '$jabatan', persetujuan = '$persetujuan', tanggal_sewa = '$pinjam', tanggal_kembali = '$kembali', keterangan = '$keterangan' WHERE id_sewa = '$id'") or die(mysqli_error($con));

    echo "<script>alert('Data berhasil disimpan'); window.location='index.php';</script>";
}
