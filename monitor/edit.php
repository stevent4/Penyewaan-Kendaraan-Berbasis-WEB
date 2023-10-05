<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Chart
            <small>Chart</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Chart</h3>
                    </div>
                    <?php
                    $id = @$_GET['id'];
                    $sql_k = mysqli_query($con, "SELECT * FROM tb_pemakaian WHERE id = '$id'") or die(mysqli_error($con));
                    $dt = mysqli_fetch_array($sql_k);
                    ?>
                    <form action="proses.php" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Bulan" class="col-sm-2 control-label">Bulan</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" value="<?= $dt['id'] ?>">
                                    <input name="bulan" value="<?= $dt['bulan'] ?>" type="text" class="form-control" placeholder="Bulan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Pemakaian Liter" class="col-sm-2 control-label">Pemakaian Liter</label>
                                <div class="col-sm-10">
                                    <input name="bbm" value="<?= $dt['bbm'] ?>" type="number" class="form-control" placeholder="Pemakaian Liter">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Pemakaian Liter" class="col-sm-2 control-label">Pemakaian Berapa Kali</label>
                                <div class="col-sm-10">
                                    <input name="berapa" value="<?= $dt['berapa'] ?>" type="number" class="form-control" placeholder="Pemakaian Berapa Kali">
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