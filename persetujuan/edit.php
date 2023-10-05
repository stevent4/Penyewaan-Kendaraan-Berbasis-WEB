<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="pull-right">
            <button type="button" class="btn btn-default" onclick="window.location.reload();" name="button"> <span class="glyphicon glyphicon-refresh"></span> </button>
        </div>
        <h1>
            Edit Penyewa
            <small>Edit Penyewa</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Penyewa</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <?php
                    $id = @$_GET['id'];
                    $sql_k = mysqli_query($con, "SELECT * FROM tb_penyewa WHERE id_sewa = '$id'") or die(mysqli_error($con));
                    $dt = mysqli_fetch_array($sql_k);
                    ?>
                    <form action="proses.php" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nama" class="col-sm-2 control-label">Nama Kendaraan</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" value="<?= $dt['id_sewa'] ?>">
                                    <input id="nama" name="nama" value="<?= $dt['nama_kendaraan'] ?>" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Merk Kendaraan" class="col-sm-2 control-label">Merk Kendaraan</label>
                                <div class="col-sm-10">
                                    <input id="merk" name="merk" value="<?= $dt['merk_kendaraan'] ?>" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Jenis Kendaraan" class="col-sm-2 control-label">Jenis Kendaraan</label>
                                <div class="col-sm-10">
                                    <input id="jenis" name="jenis" value="<?= $dt['jenis_kendaraan'] ?>" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Driver" class="col-sm-2 control-label">Driver</label>
                                <div class="col-sm-10">
                                    <input readonly id="driver" value="<?= $dt['driver'] ?>" name="driver" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama" class="col-sm-2 control-label">Nama Penyetuju</label>
                                <div class="col-sm-10">
                                    <input id="penyetuju" name="penyetuju" value="<?= $dt['penyetuju'] ?>" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Jabatan" class="col-sm-2 control-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input id="jabatan" name="jabatan" value="<?= $dt['jabatan'] ?>" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Persetujuan" class="col-sm-2 control-label">Persetujuan</label>
                                <div class="col-sm-10">
                                    <select name="persetujuan" class="form-control">
                                        <?php
                                        $ds = $dt['persetujuan'];
                                        if ($ds == 'Disetujui') { ?>
                                            <option value="Disetujui">Disetujui</option>
                                            <option value='Belum Disetujui'>Belum Disetujui</option>
                                        <?php } else if ($ds == 'Belum Disetujui') { ?>
                                            <option value='Belum Disetujui'>Belum Disetujui</option>
                                            <option value="Disetujui">Disetujui</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal Pinjam" class="col-sm-2 control-label">Tanggal Pinjam</label>
                                <div class="col-sm-10">
                                    <input name="pinjam" value="<?= $dt['tanggal_sewa'] ?>" type="date" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal Kembali" class="col-sm-2 control-label">Tanggal Kembali</label>
                                <div class="col-sm-10">
                                    <input name="kembali" value="<?= $dt['tanggal_kembali'] ?>" type="date" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Keterangan" class="col-sm-2 control-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="keterangan" id="" class="form-control" readonly><?= $dt['keterangan'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" name="edit" class="btn btn-info">Simpan</button>
                            <a href="index.php" class="btn btn-default pull-right">Batal</a>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include_once('../_footer.php'); ?>