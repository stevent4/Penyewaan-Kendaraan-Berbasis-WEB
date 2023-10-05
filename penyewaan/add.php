<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="pull-right">
            <button type="button" class="btn btn-default" onclick="window.location.reload();" name="button"> <span class="glyphicon glyphicon-refresh"></span> </button>
        </div>
        <h1>
            Tambah Peminjam
            <small>Tambah Peminjam</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Peminjam</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <form action="proses.php" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nama" class="col-sm-2 control-label">Nama Kendaraan</label>
                                <div class="col-sm-10">
                                    <select name="nama" id="nama" class="form-control">
                                        <option value="">Pilih</option>
                                        <?php
                                        $sql_a = mysqli_query($con, "SELECT * FROM tb_kendaraan WHERE status = 'ready'") or die(mysqli_error($con));
                                        if (mysqli_num_rows($sql_a) > 0) {
                                            while ($data = mysqli_fetch_array($sql_a)) {
                                                // Mengisi combo box dan menyimpan merk dalam data-* attribute
                                                echo '<option value="' . $data['nama_kendaraan'] . '" data-merk="' . $data['merk_kendaraan'] . '" data-jenis="' . $data['jenis_kendaraan'] . '">' . $data['nama_kendaraan'] . '</option>';
                                            }
                                        } else {
                                            echo "<tr> <td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Merk Kendaraan" class="col-sm-2 control-label">Merk Kendaraan</label>
                                <div class="col-sm-10">
                                    <input id="merk" name="merk" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Jenis Kendaraan" class="col-sm-2 control-label">Jenis Kendaraan</label>
                                <div class="col-sm-10">
                                    <input id="jenis" name="jenis" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Driver" class="col-sm-2 control-label">Driver</label>
                                <div class="col-sm-10">
                                    <input name="driver" placeholder="Masukkan Nama Driver" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama" class="col-sm-2 control-label">Nama Penyetuju</label>
                                <div class="col-sm-10">
                                    <select name="penyetuju" id="penyetuju" class="form-control">
                                        <option value="">Pilih</option>
                                        <?php
                                        $sql_a = mysqli_query($con, "SELECT * FROM tb_user WHERE level = 'pengguna'") or die(mysqli_error($con));
                                        if (mysqli_num_rows($sql_a) > 0) {
                                            while ($data = mysqli_fetch_array($sql_a)) {
                                                // Mengisi combo box dan menyimpan merk dalam data-* attribute
                                                echo '<option value="' . $data['nama_user'] . '" data-jabatan="' . $data['jabatan'] . '">' . $data['nama_user'] . '</option>';
                                            }
                                        } else {
                                            echo "<tr> <td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Jabatan" class="col-sm-2 control-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input id="jabatan" name="jabatan" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Persetujuan" class="col-sm-2 control-label">Persetujuan</label>
                                <div class="col-sm-10">
                                    <input name="persetujuan" type="text" value="Belum Disetujui" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal Pinjam" class="col-sm-2 control-label">Tanggal Pinjam</label>
                                <div class="col-sm-10">
                                    <input name="pinjam" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal Kembali" class="col-sm-2 control-label">Tanggal Kembali</label>
                                <div class="col-sm-10">
                                    <input name="kembali" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Keterangan" class="col-sm-2 control-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="keterangan" id="" class="form-control"></textarea>
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
<script>
    var combo = document.getElementById("nama");
    var merkInput = document.getElementById("merk");
    var jenisInput = document.getElementById("jenis");

    var penyetuju = document.getElementById("penyetuju");
    var jabatanInput = document.getElementById("jabatan");

    combo.addEventListener("change", function() {
        // Mengambil nilai data-merk dari elemen option yang dipilih
        var selectedOption = combo.options[combo.selectedIndex];
        var selectedMerk = selectedOption.getAttribute("data-merk");
        var selectedJenis = selectedOption.getAttribute("data-jenis");

        // Mengisi input type text dengan nilai yang sesuai
        merkInput.value = selectedMerk;
        jenisInput.value = selectedJenis;
    });

    penyetuju.addEventListener("change", function() {
        // Mengambil nilai data-merk dari elemen option yang dipilih
        var selectedOption = penyetuju.options[penyetuju.selectedIndex];
        var selectedJabatan = selectedOption.getAttribute("data-jabatan");

        // Mengisi input type text dengan nilai yang sesuai
        jabatanInput.value = selectedJabatan;
    });
</script>