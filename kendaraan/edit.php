<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Kriteria
            <small>Kriteria</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Kriteria</h3>
                    </div>
                    <?php
                    $id = @$_GET['id'];
                    $sql_k = mysqli_query($con, "SELECT * FROM tb_kendaraan WHERE id = '$id'") or die(mysqli_error($con));
                    $dt = mysqli_fetch_array($sql_k);
                    ?>
                    <form action="proses.php" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Nama Kendaraan" class="col-sm-2 control-label">Nama Kendaraan</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" value="<?= $dt['id'] ?>">
                                    <input name="nama" value="<?= $dt['nama_kendaraan'] ?>" type="text" class="form-control" placeholder="Nama Kendaraan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Merk Kendaraan" class="col-sm-2 control-label">Merk Kendaraan</label>
                                <div class="col-sm-10">
                                    <input name="merk" value="<?= $dt['merk_kendaraan'] ?>" type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Jenis Kendaraan" class="col-sm-2 control-label">Jenis Kendaraan</label>
                                <div class="col-sm-10">
                                    <input name="jenis" value="<?= $dt['jenis_kendaraan'] ?>" type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Jenis Kendaraan" class="col-sm-2 control-label">Terakhir Servis</label>
                                <div class="col-sm-10">
                                    <input name="servis" value="<?= $dt['servis'] ?>" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control">
                                        <?php
                                        $ds = $dt['status'];
                                        if ($ds == 'Ready') { ?>
                                            <option value="Ready">Ready</option>
                                            <option value='UnReady'>UnReady</option>
                                        <?php } else if ($ds == 'UnReady') { ?>
                                            <option value='UnReady'>UnReady</option>
                                            <option value="Ready">Ready</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
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