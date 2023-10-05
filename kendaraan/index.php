<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="pull-right">
            <button type="button" class="btn btn-default" onclick="window.location.reload();" name="button"> <span class="glyphicon glyphicon-refresh"></span> </button>
            <a href="add.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"> Tambah kendaraan</i></a>
        </div>
        <h1>
            Data Kendaraan
            <small>Data Kendaraan</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Kendaraan</h3>
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
                                    <th>Servis</th>
                                    <th>status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql_a = mysqli_query($con, "SELECT * FROM tb_kendaraan") or die(mysqli_error($con));
                                if (mysqli_num_rows($sql_a) > 0) {
                                    while ($data = mysqli_fetch_array($sql_a)) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama_kendaraan'] ?></td>
                                            <td><?= $data['merk_kendaraan'] ?></td>
                                            <td><?= $data['jenis_kendaraan'] ?></td>
                                            <td><?= $data['servis'] ?></td>
                                            <td><?= $data['status'] ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-primary"> <i class="glyphicon glyphicon-edit"></i></a>
                                                    <a href="del.php?id=<?= $data['id'] ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-trash"></i></a>
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
        </div>
    </section>
</div>
<?php include_once('../_footer.php'); ?>