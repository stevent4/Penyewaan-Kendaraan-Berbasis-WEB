<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Kendaraan
            <small>Tambah Kendaraan</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Kendaraan</h3>
                    </div>
                    <form action="proses.php" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Nama Kendaraan" class="col-sm-2 control-label">Nama Kendaraan</label>
                                <div class="col-sm-10">
                                    <input name="nama" type="text" class="form-control" placeholder="Nama Kendaraan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Merk Kendaraan" class="col-sm-2 control-label">Merk Kendaraan</label>
                                <div class="col-sm-10">
                                    <input name="merk" type="text" class="form-control" placeholder="Merk Kendaraan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Jenis Kendaraan" class="col-sm-2 control-label">Jenis Kendaraan</label>
                                <div class="col-sm-10">
                                    <input name="jenis" type="text" class="form-control" placeholder="Jenis Kendaraan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Servis" class="col-sm-2 control-label">Servis</label>
                                <div class="col-sm-10">
                                    <input name="servis" type="date" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Status" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control col-sm-10" id="Status">
                                        <option value="Ready">Ready</option>
                                        <option value="UnReady">UnReady</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" name="tambah" class="btn btn-info">Simpan</button>
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