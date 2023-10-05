<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
      <small>Sewa Kendaraan</small>
    </h1>
  </section>
  <section class="content">
    <?php
    if ($data_level == "Admin") { ?>
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Grafik Konsumsi BBM 2023</h3>
            </div>
            <div class="panel-body">
              <canvas id="myChart" width="200" height="100"></canvas>
            </div>
            <div class="panel-footer">
              <!-- <a href="#" class="btn btn-sm btn-default">View Details</a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Grafik Penyewaan 2023</h3>
            </div>
            <div class="panel-body">
              <canvas id="pemakaian" width="200" height="100"></canvas>
            </div>
            <div class="panel-footer">
              <!-- <a href="#" class="btn btn-sm btn-default">View Details</a> -->
            </div>
          </div>
        </div>
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
              <table id="example1" class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kendaraan</th>
                    <th>Merk Kendaraan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Servis</th>
                    <th>status</th>
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
    <?php
    } else if ($data_level == "pengguna") { ?>
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">
            <a href="../persetujuan/index.php">
              <div class="panel-heading" style="padding-top: 31pt ; padding-bottom: 31pt;">
                <?php
                $sql_a = mysqli_query($con, "SELECT * FROM tb_penyewa where penyetuju = '$data_nama' AND persetujuan = 'Belum Disetujui'") or die(mysqli_error($con));

                // Menghitung jumlah baris yang ditemukan
                $jumlahBaris = mysqli_num_rows($sql_a);
                echo "<h1 class='panel-title' style='text-align:center;font-size: 25pt;'>Perlu Persetujuan : " . $jumlahBaris . "</h1>";
                ?>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading" style="padding-top: 31pt ; padding-bottom: 31pt;">
              <?php
              $sql_a = mysqli_query($con, "SELECT * FROM tb_penyewa where penyetuju = '$data_nama' AND persetujuan = 'Disetujui'") or die(mysqli_error($con));

              // Menghitung jumlah baris yang ditemukan
              $jumlahBaris = mysqli_num_rows($sql_a);
              echo "<h1 class='panel-title' style='text-align:center;font-size: 25pt;'>Sudah Disetujui : " . $jumlahBaris . "</h1>";
              ?>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </section>
</div>
<?php include_once('../_footer.php'); ?>

<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  <?php
  $bulan = array();
  $bbm = array();

  $sql_a = mysqli_query($con, "SELECT * FROM tb_pemakaian") or die(mysqli_error($con));

  while ($row = mysqli_fetch_assoc($sql_a)) {
    $bulan[] = $row['bulan'];
    $bbm[] = $row['bbm'];
  }
  ?>
  var myChart = new Chart(ctx, {
    type: 'line', // Menggunakan tipe line chart
    data: {
      labels: <?php echo json_encode($bulan); ?>,
      datasets: [{
        label: 'Konsumsi Bahan Bakar',
        data: <?php echo json_encode($bbm); ?>,
        backgroundColor: 'rgba(255, 99, 132, 0.2)', // Warna area bawah garis
        borderColor: 'rgba(255, 99, 132)', // Warna garis
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById("pemakaian").getContext('2d');
  <?php
  $bulan = array();
  $berapa = array();

  $sql_a = mysqli_query($con, "SELECT * FROM tb_pemakaian") or die(mysqli_error($con));

  while ($row = mysqli_fetch_assoc($sql_a)) {
    $bulan[] = $row['bulan'];
    $berapa[] = $row['berapa'];
  }
  ?>
  var myChart = new Chart(ctx, {
    type: 'line', // Menggunakan tipe line chart
    data: {
      labels: <?php echo json_encode($bulan); ?>,
      datasets: [{
        label: 'Frekuensi Penyewaan',
        data: <?php echo json_encode($berapa); ?>,
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>