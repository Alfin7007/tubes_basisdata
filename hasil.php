<?php  
require_once "kon/koneksi.php";
                     $query=$koneksi->query("SELECT * FROM tbl_calon");
                    while ($pilca=$query->fetch_array()) {
                        $nama[] = $pilca['nama'];
                        $jumlah[] = $pilca['jumlah'];
                    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hasil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="admin/asset/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="admin/asset/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="admin/asset/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="admin/asset/css/pop.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="admin/asset/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="admin/asset/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="admin/asset/img/favicon.ico">
</head>
<body>
	<div class=" bg-primary">
  <div class="row">
    <div class="col col-md-2" style="text-align: center;">
      <img src="admin/img/logoa.png" width="100" height="100" alt="">
    </div>
    <div class="col col-md-8">
      <p style="text-align: center;margin: 0px;padding: 0px;font-size: 22px" class="text-dark"><strong>PEMILIHAN KETUA UMUM<br>
FORUM MAHASISWA BIDIKMISI<br>
PERIODE 2019-2020</strong></p>
    </div>
    <div class="col col-md-2">
    	<div style="text-align: center;">
      <img src="admin/img/logob.png" width="100" height="100" alt="">
  </div>
    </div>
  </div>
</div>
                    <div class="card-body">
<section class="dashboard-counts" style="padding: 0">
              <div class="container-fluid">
                <div class="row bg-white has-shadow">
                	<div class="col-xl-12">
                		<div class="title" style="text-align: center;font-size: 25px"><span ><b>Hasil Pemilihan :</b></span>
                      </div>
                	</div>
                	<div class="row">
                	<div class="col-xl-12">
                    <canvas id="myChart" style="height:40vh; width:80vw"></canvas>
                		<div class="row" style="padding: 0">
                  <!-- Item -->
                  <div class="col-xl-4 col-sm-6">
                    <div class="item d-flex align-items-center">
                      <div class="icon bg-violet"><i class="icon-user"></i></div>
                      <div class="title"><span>DIMAS DHARMA SATYA MAULANA MAJID</span>
                      </div>
                      <?php 
                      $querya=mysqli_query($koneksi,"SELECT * FROM tbl_calon WHERE id_calon=17");
                        $rowb = mysqli_fetch_array($querya);
                        $caria=$rowb["jumlah"];
                      ?>                           
                      <div class="number"><strong><?php echo $caria ?></strong></div>
                    </div>
                  </div>
                  <!-- Item -->
                  <div class="col-xl-4 col-sm-6">
                    <div class="item d-flex align-items-center">
                      <div class="icon bg-red"><i class="icon-user"></i></div>
                      <div class="title"><span>ITA HANDAYANI</span>
                      </div>
                      <?php 
                      $queryu=mysqli_query($koneksi,"SELECT * FROM tbl_calon WHERE id_calon=21");
                        $rowb = mysqli_fetch_array($queryu);
                        $carib=$rowb["jumlah"];
                      ?>                     
                      <div class="number"><strong><?php echo $carib ?></strong></div>
                    </div>
                  </div>
                  <!-- Item -->
                  <div class="col-xl-4 col-sm-6">
                    <div class="item d-flex align-items-center">
                      <div class="icon bg-violet"><i class="icon-user"></i></div>
                      <div class="title"><span>ANDHI JUWHANGGA</span>
                      </div>
                        <?php 
                        $queryb=mysqli_query($koneksi,"SELECT * FROM tbl_calon WHERE id_calon=20");
                        $rowb = mysqli_fetch_array($queryb);
                        $caric=$rowb["jumlah"];
                        ?>                     
                      <div class="number"><strong><?php echo $caric ?></strong></div>
                    </div>
                  </div>
                  </div>
              </div>
              </div>
                </div>
              </div>
            </section> 
                    </div>
                  </div>
                </div>
              

<br>
<br>
<div class="row">
<div class="col-xl-12">
	<div class="row">
		
	
	<?php
$query=$koneksi->query("SELECT * FROM `tbl_calon` ORDER BY `tbl_calon`.`no` ASC");
$queryy=$koneksi->query("SELECT `nampung` FROM `tbl_penampung`");
$queryyy=$koneksi->query("SELECT * FROM `tbl_user`");
$queryyyy=$koneksi->query("SELECT `status` FROM `tbl_user` WHERE status = 'sudah'");
$queryyyyy=$koneksi->query("SELECT `status` FROM `tbl_user` WHERE status = 'belum'");
$total_seluruh=mysqli_num_rows($queryy);
$total_code_pin=mysqli_num_rows($queryyy);
$total_code_pin_terpakai=mysqli_num_rows($queryyyy);
$total_code_pin_tidak_terpakai=mysqli_num_rows($queryyyyy);
while ($pilca=$query->fetch_assoc()) {

?>
	<div class="col col-xl-4">
		<div class="card">
  <img class="card-img-top" src="epemilu/<?php echo $pilca['foto'] ?>" alt="Card image cap" style="height: 350px !important; width: 100%;">
  <div class="card-body">
    <h5 class="card-title"><b><?php echo $pilca['nama'];?></b></h5>
    <p class="card-text"><b>Hasil Suara: <?php echo $pilca['jumlah'];?></b></p>
    <p class="card-text"><small class="text-muted">No Urut <?php echo $pilca['no'];?></small></p>
  </div>
</div>
</div>
	
	<?php
	} 
	?>
</div>	
</div>
</div>
<div class="col col-md-12">
	<div class="card">
  <div class="card-body">
  	<p style="text-align: center;margin: 0px;padding: 0px;font-size: 22px" class="text-dark"><b>Keterangan</b></p>
    TOTAL SELURUH : <?php echo $total_seluruh;?><br>
    TOTAL Code Pin : <?php echo $total_code_pin;?><br>
    TOTAL Code Pin Terpakai : <?php echo $total_code_pin_terpakai;?><br>
    TOTAL Code Pin Tidak Dipakai : <?php echo $total_code_pin_tidak_terpakai;?><br>
	
  </div>
</div>	
</div>

    <!-- Javascript files-->
    <script src="admin/asset/js/jquery-3.2.1.min.js"></script>   
    <script src="admin/asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/asset/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin/asset/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin/asset/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/asset/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!--script src="admin/asset/js/charts-custom.js"></script-->
    <!--- <script src="asset/js/charts-home.js"></script> -->
    <!-- Main File-->
    <script src="admin/asset/js/front.js"></script>
    <script src="asset/js/chart.js"></script>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($nama); ?>,
                datasets: [{
                    label: 'jumlah Pemilihan Ketua Umum',
                    data: <?php echo json_encode($jumlah); ?>,
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
</body>
</html>