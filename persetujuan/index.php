<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="pull-right">
            <button type="button" class="btn btn-default" onclick="window.location.reload();" name="button"> <span class="glyphicon glyphicon-refresh"></span> </button>
            <!-- <a href="add.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"> Tambah Penyewa</i></a> -->
        </div>
        <h1>
            Data Penyewa
            <small>Data Penyewa</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Butuh Persetujuan</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kendaraan</th>
                                    <th>Merk Kendaraan</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Nama Driver</th>
                                    <th>Penyetuju</th>
                                    <th>Jabatan</th>
                                    <th>Status</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql_a = mysqli_query($con, "SELECT * FROM tb_penyewa where penyetuju = '$data_nama' AND persetujuan = 'Belum Disetujui'") or die(mysqli_error($con));
                                if (mysqli_num_rows($sql_a) > 0) {
                                    while ($data = mysqli_fetch_array($sql_a)) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama_kendaraan'] ?></td>
                                            <td><?= $data['merk_kendaraan'] ?></td>
                                            <td><?= $data['jenis_kendaraan'] ?></td>
                                            <td><?= $data['driver'] ?></td>
                                            <td><?= $data['penyetuju'] ?></td>
                                            <td><?= $data['jabatan'] ?></td>
                                            <td><?= $data['persetujuan'] ?></td>
                                            <td><?= $data['tanggal_sewa'] ?></td>
                                            <td><?= $data['tanggal_kembali'] ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="edit.php?id=<?= $data['id_sewa'] ?>" class="btn btn-primary"> <i class="glyphicon glyphicon-edit"></i></a>
                                                    <a href="del.php?id=<?= $data['id_sewa'] ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr> <td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sudah Disetujui</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body dendi">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kendaraan</th>
                                    <th>Merk Kendaraan</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Nama Driver</th>
                                    <th>Penyetuju</th>
                                    <th>Jabatan</th>
                                    <th>Status</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql_a = mysqli_query($con, "SELECT * FROM tb_penyewa where penyetuju = '$data_nama' AND persetujuan = 'Disetujui'") or die(mysqli_error($con));
                                if (mysqli_num_rows($sql_a) > 0) {
                                    while ($data = mysqli_fetch_array($sql_a)) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama_kendaraan'] ?></td>
                                            <td><?= $data['merk_kendaraan'] ?></td>
                                            <td><?= $data['jenis_kendaraan'] ?></td>
                                            <td><?= $data['driver'] ?></td>
                                            <td><?= $data['penyetuju'] ?></td>
                                            <td><?= $data['jabatan'] ?></td>
                                            <td><?= $data['persetujuan'] ?></td>
                                            <td><?= $data['tanggal_sewa'] ?></td>
                                            <td><?= $data['tanggal_kembali'] ?></td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr> <td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include_once('../_footer.php'); ?>